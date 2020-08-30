"use strict";

var helpers = require("../helpers/helpers");

exports["EST5EDT"] = {
	"1918" : helpers.makeTestYear("EST5EDT", [
		["1918-03-31T06:59:59+00:00", "01:59:59", "EST", 300],
		["1918-03-31T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1918-10-27T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1918-10-27T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1919" : helpers.makeTestYear("EST5EDT", [
		["1919-03-30T06:59:59+00:00", "01:59:59", "EST", 300],
		["1919-03-30T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1919-10-26T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1919-10-26T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1942" : helpers.makeTestYear("EST5EDT", [
		["1942-02-09T06:59:59+00:00", "01:59:59", "EST", 300],
		["1942-02-09T07:00:00+00:00", "03:00:00", "EWT", 240]
	]),

	"1945" : helpers.makeTestYear("EST5EDT", [
		["1945-08-14T22:59:59+00:00", "18:59:59", "EWT", 240],
		["1945-08-14T23:00:00+00:00", "19:00:00", "EPT", 240],
		["1945-09-30T05:59:59+00:00", "01:59:59", "EPT", 240],
		["1945-09-30T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1967" : helpers.makeTestYear("EST5EDT", [
		["1967-04-30T06:59:59+00:00", "01:59:59", "EST", 300],
		["1967-04-30T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1967-10-29T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1967-10-29T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1968" : helpers.makeTestYear("EST5EDT", [
		["1968-04-28T06:59:59+00:00", "01:59:59", "EST", 300],
		["1968-04-28T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1968-10-27T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1968-10-27T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1969" : helpers.makeTestYear("EST5EDT", [
		["1969-04-27T06:59:59+00:00", "01:59:59", "EST", 300],
		["1969-04-27T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1969-10-26T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1969-10-26T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1970" : helpers.makeTestYear("EST5EDT", [
		["1970-04-26T06:59:59+00:00", "01:59:59", "EST", 300],
		["1970-04-26T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1970-10-25T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1970-10-25T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1971" : helpers.makeTestYear("EST5EDT", [
		["1971-04-25T06:59:59+00:00", "01:59:59", "EST", 300],
		["1971-04-25T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1971-10-31T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1971-10-31T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1972" : helpers.makeTestYear("EST5EDT", [
		["1972-04-30T06:59:59+00:00", "01:59:59", "EST", 300],
		["1972-04-30T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1972-10-29T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1972-10-29T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1973" : helpers.makeTestYear("EST5EDT", [
		["1973-04-29T06:59:59+00:00", "01:59:59", "EST", 300],
		["1973-04-29T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1973-10-28T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1973-10-28T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1974" : helpers.makeTestYear("EST5EDT", [
		["1974-01-06T06:59:59+00:00", "01:59:59", "EST", 300],
		["1974-01-06T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1974-10-27T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1974-10-27T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1975" : helpers.makeTestYear("EST5EDT", [
		["1975-02-23T06:59:59+00:00", "01:59:59", "EST", 300],
		["1975-02-23T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1975-10-26T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1975-10-26T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1976" : helpers.makeTestYear("EST5EDT", [
		["1976-04-25T06:59:59+00:00", "01:59:59", "EST", 300],
		["1976-04-25T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1976-10-31T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1976-10-31T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1977" : helpers.makeTestYear("EST5EDT", [
		["1977-04-24T06:59:59+00:00", "01:59:59", "EST", 300],
		["1977-04-24T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1977-10-30T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1977-10-30T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1978" : helpers.makeTestYear("EST5EDT", [
		["1978-04-30T06:59:59+00:00", "01:59:59", "EST", 300],
		["1978-04-30T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1978-10-29T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1978-10-29T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1979" : helpers.makeTestYear("EST5EDT", [
		["1979-04-29T06:59:59+00:00", "01:59:59", "EST", 300],
		["1979-04-29T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1979-10-28T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1979-10-28T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1980" : helpers.makeTestYear("EST5EDT", [
		["1980-04-27T06:59:59+00:00", "01:59:59", "EST", 300],
		["1980-04-27T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1980-10-26T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1980-10-26T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1981" : helpers.makeTestYear("EST5EDT", [
		["1981-04-26T06:59:59+00:00", "01:59:59", "EST", 300],
		["1981-04-26T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1981-10-25T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1981-10-25T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1982" : helpers.makeTestYear("EST5EDT", [
		["1982-04-25T06:59:59+00:00", "01:59:59", "EST", 300],
		["1982-04-25T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1982-10-31T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1982-10-31T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1983" : helpers.makeTestYear("EST5EDT", [
		["1983-04-24T06:59:59+00:00", "01:59:59", "EST", 300],
		["1983-04-24T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1983-10-30T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1983-10-30T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1984" : helpers.makeTestYear("EST5EDT", [
		["1984-04-29T06:59:59+00:00", "01:59:59", "EST", 300],
		["1984-04-29T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1984-10-28T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1984-10-28T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1985" : helpers.makeTestYear("EST5EDT", [
		["1985-04-28T06:59:59+00:00", "01:59:59", "EST", 300],
		["1985-04-28T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1985-10-27T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1985-10-27T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1986" : helpers.makeTestYear("EST5EDT", [
		["1986-04-27T06:59:59+00:00", "01:59:59", "EST", 300],
		["1986-04-27T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1986-10-26T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1986-10-26T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1987" : helpers.makeTestYear("EST5EDT", [
		["1987-04-05T06:59:59+00:00", "01:59:59", "EST", 300],
		["1987-04-05T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1987-10-25T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1987-10-25T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1988" : helpers.makeTestYear("EST5EDT", [
		["1988-04-03T06:59:59+00:00", "01:59:59", "EST", 300],
		["1988-04-03T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1988-10-30T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1988-10-30T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1989" : helpers.makeTestYear("EST5EDT", [
		["1989-04-02T06:59:59+00:00", "01:59:59", "EST", 300],
		["1989-04-02T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1989-10-29T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1989-10-29T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1990" : helpers.makeTestYear("EST5EDT", [
		["1990-04-01T06:59:59+00:00", "01:59:59", "EST", 300],
		["1990-04-01T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1990-10-28T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1990-10-28T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1991" : helpers.makeTestYear("EST5EDT", [
		["1991-04-07T06:59:59+00:00", "01:59:59", "EST", 300],
		["1991-04-07T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1991-10-27T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1991-10-27T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1992" : helpers.makeTestYear("EST5EDT", [
		["1992-04-05T06:59:59+00:00", "01:59:59", "EST", 300],
		["1992-04-05T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1992-10-25T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1992-10-25T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1993" : helpers.makeTestYear("EST5EDT", [
		["1993-04-04T06:59:59+00:00", "01:59:59", "EST", 300],
		["1993-04-04T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1993-10-31T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1993-10-31T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1994" : helpers.makeTestYear("EST5EDT", [
		["1994-04-03T06:59:59+00:00", "01:59:59", "EST", 300],
		["1994-04-03T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1994-10-30T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1994-10-30T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1995" : helpers.makeTestYear("EST5EDT", [
		["1995-04-02T06:59:59+00:00", "01:59:59", "EST", 300],
		["1995-04-02T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1995-10-29T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1995-10-29T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1996" : helpers.makeTestYear("EST5EDT", [
		["1996-04-07T06:59:59+00:00", "01:59:59", "EST", 300],
		["1996-04-07T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1996-10-27T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1996-10-27T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1997" : helpers.makeTestYear("EST5EDT", [
		["1997-04-06T06:59:59+00:00", "01:59:59", "EST", 300],
		["1997-04-06T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1997-10-26T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1997-10-26T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1998" : helpers.makeTestYear("EST5EDT", [
		["1998-04-05T06:59:59+00:00", "01:59:59", "EST", 300],
		["1998-04-05T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1998-10-25T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1998-10-25T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"1999" : helpers.makeTestYear("EST5EDT", [
		["1999-04-04T06:59:59+00:00", "01:59:59", "EST", 300],
		["1999-04-04T07:00:00+00:00", "03:00:00", "EDT", 240],
		["1999-10-31T05:59:59+00:00", "01:59:59", "EDT", 240],
		["1999-10-31T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2000" : helpers.makeTestYear("EST5EDT", [
		["2000-04-02T06:59:59+00:00", "01:59:59", "EST", 300],
		["2000-04-02T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2000-10-29T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2000-10-29T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2001" : helpers.makeTestYear("EST5EDT", [
		["2001-04-01T06:59:59+00:00", "01:59:59", "EST", 300],
		["2001-04-01T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2001-10-28T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2001-10-28T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2002" : helpers.makeTestYear("EST5EDT", [
		["2002-04-07T06:59:59+00:00", "01:59:59", "EST", 300],
		["2002-04-07T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2002-10-27T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2002-10-27T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2003" : helpers.makeTestYear("EST5EDT", [
		["2003-04-06T06:59:59+00:00", "01:59:59", "EST", 300],
		["2003-04-06T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2003-10-26T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2003-10-26T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2004" : helpers.makeTestYear("EST5EDT", [
		["2004-04-04T06:59:59+00:00", "01:59:59", "EST", 300],
		["2004-04-04T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2004-10-31T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2004-10-31T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2005" : helpers.makeTestYear("EST5EDT", [
		["2005-04-03T06:59:59+00:00", "01:59:59", "EST", 300],
		["2005-04-03T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2005-10-30T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2005-10-30T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2006" : helpers.makeTestYear("EST5EDT", [
		["2006-04-02T06:59:59+00:00", "01:59:59", "EST", 300],
		["2006-04-02T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2006-10-29T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2006-10-29T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2007" : helpers.makeTestYear("EST5EDT", [
		["2007-03-11T06:59:59+00:00", "01:59:59", "EST", 300],
		["2007-03-11T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2007-11-04T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2007-11-04T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2008" : helpers.makeTestYear("EST5EDT", [
		["2008-03-09T06:59:59+00:00", "01:59:59", "EST", 300],
		["2008-03-09T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2008-11-02T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2008-11-02T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2009" : helpers.makeTestYear("EST5EDT", [
		["2009-03-08T06:59:59+00:00", "01:59:59", "EST", 300],
		["2009-03-08T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2009-11-01T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2009-11-01T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2010" : helpers.makeTestYear("EST5EDT", [
		["2010-03-14T06:59:59+00:00", "01:59:59", "EST", 300],
		["2010-03-14T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2010-11-07T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2010-11-07T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2011" : helpers.makeTestYear("EST5EDT", [
		["2011-03-13T06:59:59+00:00", "01:59:59", "EST", 300],
		["2011-03-13T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2011-11-06T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2011-11-06T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2012" : helpers.makeTestYear("EST5EDT", [
		["2012-03-11T06:59:59+00:00", "01:59:59", "EST", 300],
		["2012-03-11T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2012-11-04T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2012-11-04T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2013" : helpers.makeTestYear("EST5EDT", [
		["2013-03-10T06:59:59+00:00", "01:59:59", "EST", 300],
		["2013-03-10T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2013-11-03T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2013-11-03T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2014" : helpers.makeTestYear("EST5EDT", [
		["2014-03-09T06:59:59+00:00", "01:59:59", "EST", 300],
		["2014-03-09T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2014-11-02T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2014-11-02T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2015" : helpers.makeTestYear("EST5EDT", [
		["2015-03-08T06:59:59+00:00", "01:59:59", "EST", 300],
		["2015-03-08T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2015-11-01T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2015-11-01T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2016" : helpers.makeTestYear("EST5EDT", [
		["2016-03-13T06:59:59+00:00", "01:59:59", "EST", 300],
		["2016-03-13T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2016-11-06T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2016-11-06T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2017" : helpers.makeTestYear("EST5EDT", [
		["2017-03-12T06:59:59+00:00", "01:59:59", "EST", 300],
		["2017-03-12T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2017-11-05T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2017-11-05T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2018" : helpers.makeTestYear("EST5EDT", [
		["2018-03-11T06:59:59+00:00", "01:59:59", "EST", 300],
		["2018-03-11T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2018-11-04T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2018-11-04T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2019" : helpers.makeTestYear("EST5EDT", [
		["2019-03-10T06:59:59+00:00", "01:59:59", "EST", 300],
		["2019-03-10T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2019-11-03T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2019-11-03T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2020" : helpers.makeTestYear("EST5EDT", [
		["2020-03-08T06:59:59+00:00", "01:59:59", "EST", 300],
		["2020-03-08T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2020-11-01T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2020-11-01T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2021" : helpers.makeTestYear("EST5EDT", [
		["2021-03-14T06:59:59+00:00", "01:59:59", "EST", 300],
		["2021-03-14T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2021-11-07T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2021-11-07T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2022" : helpers.makeTestYear("EST5EDT", [
		["2022-03-13T06:59:59+00:00", "01:59:59", "EST", 300],
		["2022-03-13T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2022-11-06T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2022-11-06T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2023" : helpers.makeTestYear("EST5EDT", [
		["2023-03-12T06:59:59+00:00", "01:59:59", "EST", 300],
		["2023-03-12T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2023-11-05T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2023-11-05T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2024" : helpers.makeTestYear("EST5EDT", [
		["2024-03-10T06:59:59+00:00", "01:59:59", "EST", 300],
		["2024-03-10T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2024-11-03T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2024-11-03T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2025" : helpers.makeTestYear("EST5EDT", [
		["2025-03-09T06:59:59+00:00", "01:59:59", "EST", 300],
		["2025-03-09T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2025-11-02T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2025-11-02T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2026" : helpers.makeTestYear("EST5EDT", [
		["2026-03-08T06:59:59+00:00", "01:59:59", "EST", 300],
		["2026-03-08T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2026-11-01T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2026-11-01T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2027" : helpers.makeTestYear("EST5EDT", [
		["2027-03-14T06:59:59+00:00", "01:59:59", "EST", 300],
		["2027-03-14T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2027-11-07T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2027-11-07T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2028" : helpers.makeTestYear("EST5EDT", [
		["2028-03-12T06:59:59+00:00", "01:59:59", "EST", 300],
		["2028-03-12T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2028-11-05T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2028-11-05T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2029" : helpers.makeTestYear("EST5EDT", [
		["2029-03-11T06:59:59+00:00", "01:59:59", "EST", 300],
		["2029-03-11T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2029-11-04T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2029-11-04T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2030" : helpers.makeTestYear("EST5EDT", [
		["2030-03-10T06:59:59+00:00", "01:59:59", "EST", 300],
		["2030-03-10T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2030-11-03T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2030-11-03T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2031" : helpers.makeTestYear("EST5EDT", [
		["2031-03-09T06:59:59+00:00", "01:59:59", "EST", 300],
		["2031-03-09T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2031-11-02T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2031-11-02T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2032" : helpers.makeTestYear("EST5EDT", [
		["2032-03-14T06:59:59+00:00", "01:59:59", "EST", 300],
		["2032-03-14T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2032-11-07T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2032-11-07T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2033" : helpers.makeTestYear("EST5EDT", [
		["2033-03-13T06:59:59+00:00", "01:59:59", "EST", 300],
		["2033-03-13T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2033-11-06T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2033-11-06T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2034" : helpers.makeTestYear("EST5EDT", [
		["2034-03-12T06:59:59+00:00", "01:59:59", "EST", 300],
		["2034-03-12T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2034-11-05T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2034-11-05T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2035" : helpers.makeTestYear("EST5EDT", [
		["2035-03-11T06:59:59+00:00", "01:59:59", "EST", 300],
		["2035-03-11T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2035-11-04T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2035-11-04T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2036" : helpers.makeTestYear("EST5EDT", [
		["2036-03-09T06:59:59+00:00", "01:59:59", "EST", 300],
		["2036-03-09T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2036-11-02T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2036-11-02T06:00:00+00:00", "01:00:00", "EST", 300]
	]),

	"2037" : helpers.makeTestYear("EST5EDT", [
		["2037-03-08T06:59:59+00:00", "01:59:59", "EST", 300],
		["2037-03-08T07:00:00+00:00", "03:00:00", "EDT", 240],
		["2037-11-01T05:59:59+00:00", "01:59:59", "EDT", 240],
		["2037-11-01T06:00:00+00:00", "01:00:00", "EST", 300]
	])
};