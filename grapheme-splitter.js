// Minimal GraphemeSplitter implementation for browser (from https://github.com/orling/grapheme-splitter)
// Only the splitGraphemes function is used
(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        define(factory);
    } else if (typeof exports === 'object') {
        module.exports = factory();
    } else {
        root.GraphemeSplitter = factory();
    }
}(this, function () {
    function GraphemeSplitter() {}
    GraphemeSplitter.prototype.splitGraphemes = function (str) {
        var res = [];
        var i = 0;
        while (i < str.length) {
            var next = i + 1;
            // Basic: base letter + all following combining marks and ZW chars
            while (next < str.length && /[\u0591-\u05BD\u05BF\u05C1-\u05C2\u05C4-\u05C7\u0300-\u036F\u200C-\u200F\u202A-\u202E\u2060-\u206F\uFEFF]/.test(str[next])) {
                next++;
            }
            res.push(str.slice(i, next));
            i = next;
        }
        return res;
    };
    return GraphemeSplitter;
}));
