"use strict";
const engine = require("php-parser");

function parse(text) {
  text = text.replace(/\?>\n<\?/g, "?>\n___PSEUDO_INLINE_PLACEHOLDER___<?");

  // initialize a new parser instance
  const parser = new engine({
    parser: {
      extractDoc: true,
      extractTokens: true
    },
    ast: {
      withPositions: true,
      withSource: true
    }
  });

  const ast = parser.parseCode(text);

  // https://github.com/glayzzle/php-parser/issues/155
  // currently inline comments include the line break at the end, we need to
  // strip those out and update the end location for each comment manually
  ast.comments.forEach(comment => {
    if (comment.value[comment.value.length - 1] === "\r") {
      comment.value = comment.value.slice(0, -1);
      comment.loc.end.offset = comment.loc.end.offset - 1;
    }
    if (comment.value[comment.value.length - 1] === "\n") {
      comment.value = comment.value.slice(0, -1);
      comment.loc.end.offset = comment.loc.end.offset - 1;
    }
  });

  return ast;
}

module.exports = parse;
