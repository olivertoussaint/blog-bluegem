"use strict";

var helpers = require("../../helpers/helpers");

exports["America/St_Kitts"] = {
	"1912" : helpers.makeTestYear("America/St_Kitts", [
		["1912-03-02T04:06:03+00:00", "23:59:59", "LMT", 14764 / 60],
		["1912-03-02T04:06:04+00:00", "00:06:04", "AST", 240]
	])
};