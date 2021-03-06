/*jslint node: true, indent: 2 */
'use strict';
var doBody = require('./helper/body');
var args = require('./helper/arguments');

// name, params, isRef, returnType, body
module.exports = function (node, indent) {
  var codegen, str;
  codegen = this.process.bind(this);

  str = 'function ' + node[1];
  if (node[3]) {
    str += '&';
  }
  str += args(node[2], indent, this);

  // php7 / return type
  if (node[4]) {
    str += this.ws + ':' + this.ws + node[4].join('\\');
  }

  str += this.nl + indent + '{' + this.nl;
  str += doBody(codegen, indent, this.indent, this.nl, node[5]);
  str += indent + '}';

  return str;
};
