"use strict";

var helpers = require("../../helpers/helpers");

exports["Asia/Nicosia"] = {
	"1921" : helpers.makeTestYear("Asia/Nicosia", [
		["1921-11-13T21:46:31+00:00", "23:59:59", "LMT", -8008 / 60],
		["1921-11-13T21:46:32+00:00", "23:46:32", "EET", -120]
	]),

	"1975" : helpers.makeTestYear("Asia/Nicosia", [
		["1975-04-12T21:59:59+00:00", "23:59:59", "EET", -120],
		["1975-04-12T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1975-10-11T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1975-10-11T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1976" : helpers.makeTestYear("Asia/Nicosia", [
		["1976-05-14T21:59:59+00:00", "23:59:59", "EET", -120],
		["1976-05-14T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1976-10-10T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1976-10-10T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1977" : helpers.makeTestYear("Asia/Nicosia", [
		["1977-04-02T21:59:59+00:00", "23:59:59", "EET", -120],
		["1977-04-02T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1977-09-24T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1977-09-24T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1978" : helpers.makeTestYear("Asia/Nicosia", [
		["1978-04-01T21:59:59+00:00", "23:59:59", "EET", -120],
		["1978-04-01T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1978-10-01T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1978-10-01T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1979" : helpers.makeTestYear("Asia/Nicosia", [
		["1979-03-31T21:59:59+00:00", "23:59:59", "EET", -120],
		["1979-03-31T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1979-09-29T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1979-09-29T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1980" : helpers.makeTestYear("Asia/Nicosia", [
		["1980-04-05T21:59:59+00:00", "23:59:59", "EET", -120],
		["1980-04-05T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1980-09-27T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1980-09-27T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1981" : helpers.makeTestYear("Asia/Nicosia", [
		["1981-03-28T21:59:59+00:00", "23:59:59", "EET", -120],
		["1981-03-28T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1981-09-26T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1981-09-26T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1982" : helpers.makeTestYear("Asia/Nicosia", [
		["1982-03-27T21:59:59+00:00", "23:59:59", "EET", -120],
		["1982-03-27T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1982-09-25T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1982-09-25T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1983" : helpers.makeTestYear("Asia/Nicosia", [
		["1983-03-26T21:59:59+00:00", "23:59:59", "EET", -120],
		["1983-03-26T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1983-09-24T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1983-09-24T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1984" : helpers.makeTestYear("Asia/Nicosia", [
		["1984-03-24T21:59:59+00:00", "23:59:59", "EET", -120],
		["1984-03-24T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1984-09-29T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1984-09-29T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1985" : helpers.makeTestYear("Asia/Nicosia", [
		["1985-03-30T21:59:59+00:00", "23:59:59", "EET", -120],
		["1985-03-30T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1985-09-28T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1985-09-28T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1986" : helpers.makeTestYear("Asia/Nicosia", [
		["1986-03-29T21:59:59+00:00", "23:59:59", "EET", -120],
		["1986-03-29T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1986-09-27T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1986-09-27T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1987" : helpers.makeTestYear("Asia/Nicosia", [
		["1987-03-28T21:59:59+00:00", "23:59:59", "EET", -120],
		["1987-03-28T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1987-09-26T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1987-09-26T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1988" : helpers.makeTestYear("Asia/Nicosia", [
		["1988-03-26T21:59:59+00:00", "23:59:59", "EET", -120],
		["1988-03-26T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1988-09-24T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1988-09-24T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1989" : helpers.makeTestYear("Asia/Nicosia", [
		["1989-03-25T21:59:59+00:00", "23:59:59", "EET", -120],
		["1989-03-25T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1989-09-23T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1989-09-23T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1990" : helpers.makeTestYear("Asia/Nicosia", [
		["1990-03-24T21:59:59+00:00", "23:59:59", "EET", -120],
		["1990-03-24T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1990-09-29T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1990-09-29T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1991" : helpers.makeTestYear("Asia/Nicosia", [
		["1991-03-30T21:59:59+00:00", "23:59:59", "EET", -120],
		["1991-03-30T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1991-09-28T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1991-09-28T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1992" : helpers.makeTestYear("Asia/Nicosia", [
		["1992-03-28T21:59:59+00:00", "23:59:59", "EET", -120],
		["1992-03-28T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1992-09-26T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1992-09-26T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1993" : helpers.makeTestYear("Asia/Nicosia", [
		["1993-03-27T21:59:59+00:00", "23:59:59", "EET", -120],
		["1993-03-27T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1993-09-25T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1993-09-25T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1994" : helpers.makeTestYear("Asia/Nicosia", [
		["1994-03-26T21:59:59+00:00", "23:59:59", "EET", -120],
		["1994-03-26T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1994-09-24T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1994-09-24T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1995" : helpers.makeTestYear("Asia/Nicosia", [
		["1995-03-25T21:59:59+00:00", "23:59:59", "EET", -120],
		["1995-03-25T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1995-09-23T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1995-09-23T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1996" : helpers.makeTestYear("Asia/Nicosia", [
		["1996-03-30T21:59:59+00:00", "23:59:59", "EET", -120],
		["1996-03-30T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1996-09-28T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1996-09-28T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1997" : helpers.makeTestYear("Asia/Nicosia", [
		["1997-03-29T21:59:59+00:00", "23:59:59", "EET", -120],
		["1997-03-29T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1997-09-27T20:59:59+00:00", "23:59:59", "EEST", -180],
		["1997-09-27T21:00:00+00:00", "23:00:00", "EET", -120]
	]),

	"1998" : helpers.makeTestYear("Asia/Nicosia", [
		["1998-03-28T21:59:59+00:00", "23:59:59", "EET", -120],
		["1998-03-28T22:00:00+00:00", "01:00:00", "EEST", -180],
		["1998-10-25T00:59:59+00:00", "03:59:59", "EEST", -180],
		["1998-10-25T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"1999" : helpers.makeTestYear("Asia/Nicosia", [
		["1999-03-28T00:59:59+00:00", "02:59:59", "EET", -120],
		["1999-03-28T01:00:00+00:00", "04:00:00", "EEST", -180],
		["1999-10-31T00:59:59+00:00", "03:59:59", "EEST", -180],
		["1999-10-31T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2000" : helpers.makeTestYear("Asia/Nicosia", [
		["2000-03-26T00:59:59+00:00", "02:59:59", "EET", -120],
		["2000-03-26T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2000-10-29T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2000-10-29T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2001" : helpers.makeTestYear("Asia/Nicosia", [
		["2001-03-25T00:59:59+00:00", "02:59:59", "EET", -120],
		["2001-03-25T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2001-10-28T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2001-10-28T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2002" : helpers.makeTestYear("Asia/Nicosia", [
		["2002-03-31T00:59:59+00:00", "02:59:59", "EET", -120],
		["2002-03-31T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2002-10-27T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2002-10-27T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2003" : helpers.makeTestYear("Asia/Nicosia", [
		["2003-03-30T00:59:59+00:00", "02:59:59", "EET", -120],
		["2003-03-30T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2003-10-26T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2003-10-26T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2004" : helpers.makeTestYear("Asia/Nicosia", [
		["2004-03-28T00:59:59+00:00", "02:59:59", "EET", -120],
		["2004-03-28T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2004-10-31T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2004-10-31T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2005" : helpers.makeTestYear("Asia/Nicosia", [
		["2005-03-27T00:59:59+00:00", "02:59:59", "EET", -120],
		["2005-03-27T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2005-10-30T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2005-10-30T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2006" : helpers.makeTestYear("Asia/Nicosia", [
		["2006-03-26T00:59:59+00:00", "02:59:59", "EET", -120],
		["2006-03-26T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2006-10-29T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2006-10-29T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2007" : helpers.makeTestYear("Asia/Nicosia", [
		["2007-03-25T00:59:59+00:00", "02:59:59", "EET", -120],
		["2007-03-25T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2007-10-28T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2007-10-28T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2008" : helpers.makeTestYear("Asia/Nicosia", [
		["2008-03-30T00:59:59+00:00", "02:59:59", "EET", -120],
		["2008-03-30T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2008-10-26T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2008-10-26T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2009" : helpers.makeTestYear("Asia/Nicosia", [
		["2009-03-29T00:59:59+00:00", "02:59:59", "EET", -120],
		["2009-03-29T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2009-10-25T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2009-10-25T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2010" : helpers.makeTestYear("Asia/Nicosia", [
		["2010-03-28T00:59:59+00:00", "02:59:59", "EET", -120],
		["2010-03-28T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2010-10-31T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2010-10-31T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2011" : helpers.makeTestYear("Asia/Nicosia", [
		["2011-03-27T00:59:59+00:00", "02:59:59", "EET", -120],
		["2011-03-27T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2011-10-30T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2011-10-30T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2012" : helpers.makeTestYear("Asia/Nicosia", [
		["2012-03-25T00:59:59+00:00", "02:59:59", "EET", -120],
		["2012-03-25T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2012-10-28T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2012-10-28T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2013" : helpers.makeTestYear("Asia/Nicosia", [
		["2013-03-31T00:59:59+00:00", "02:59:59", "EET", -120],
		["2013-03-31T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2013-10-27T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2013-10-27T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2014" : helpers.makeTestYear("Asia/Nicosia", [
		["2014-03-30T00:59:59+00:00", "02:59:59", "EET", -120],
		["2014-03-30T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2014-10-26T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2014-10-26T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2015" : helpers.makeTestYear("Asia/Nicosia", [
		["2015-03-29T00:59:59+00:00", "02:59:59", "EET", -120],
		["2015-03-29T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2015-10-25T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2015-10-25T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2016" : helpers.makeTestYear("Asia/Nicosia", [
		["2016-03-27T00:59:59+00:00", "02:59:59", "EET", -120],
		["2016-03-27T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2016-10-30T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2016-10-30T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2017" : helpers.makeTestYear("Asia/Nicosia", [
		["2017-03-26T00:59:59+00:00", "02:59:59", "EET", -120],
		["2017-03-26T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2017-10-29T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2017-10-29T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2018" : helpers.makeTestYear("Asia/Nicosia", [
		["2018-03-25T00:59:59+00:00", "02:59:59", "EET", -120],
		["2018-03-25T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2018-10-28T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2018-10-28T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2019" : helpers.makeTestYear("Asia/Nicosia", [
		["2019-03-31T00:59:59+00:00", "02:59:59", "EET", -120],
		["2019-03-31T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2019-10-27T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2019-10-27T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2020" : helpers.makeTestYear("Asia/Nicosia", [
		["2020-03-29T00:59:59+00:00", "02:59:59", "EET", -120],
		["2020-03-29T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2020-10-25T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2020-10-25T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2021" : helpers.makeTestYear("Asia/Nicosia", [
		["2021-03-28T00:59:59+00:00", "02:59:59", "EET", -120],
		["2021-03-28T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2021-10-31T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2021-10-31T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2022" : helpers.makeTestYear("Asia/Nicosia", [
		["2022-03-27T00:59:59+00:00", "02:59:59", "EET", -120],
		["2022-03-27T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2022-10-30T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2022-10-30T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2023" : helpers.makeTestYear("Asia/Nicosia", [
		["2023-03-26T00:59:59+00:00", "02:59:59", "EET", -120],
		["2023-03-26T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2023-10-29T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2023-10-29T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2024" : helpers.makeTestYear("Asia/Nicosia", [
		["2024-03-31T00:59:59+00:00", "02:59:59", "EET", -120],
		["2024-03-31T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2024-10-27T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2024-10-27T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2025" : helpers.makeTestYear("Asia/Nicosia", [
		["2025-03-30T00:59:59+00:00", "02:59:59", "EET", -120],
		["2025-03-30T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2025-10-26T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2025-10-26T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2026" : helpers.makeTestYear("Asia/Nicosia", [
		["2026-03-29T00:59:59+00:00", "02:59:59", "EET", -120],
		["2026-03-29T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2026-10-25T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2026-10-25T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2027" : helpers.makeTestYear("Asia/Nicosia", [
		["2027-03-28T00:59:59+00:00", "02:59:59", "EET", -120],
		["2027-03-28T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2027-10-31T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2027-10-31T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2028" : helpers.makeTestYear("Asia/Nicosia", [
		["2028-03-26T00:59:59+00:00", "02:59:59", "EET", -120],
		["2028-03-26T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2028-10-29T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2028-10-29T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2029" : helpers.makeTestYear("Asia/Nicosia", [
		["2029-03-25T00:59:59+00:00", "02:59:59", "EET", -120],
		["2029-03-25T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2029-10-28T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2029-10-28T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2030" : helpers.makeTestYear("Asia/Nicosia", [
		["2030-03-31T00:59:59+00:00", "02:59:59", "EET", -120],
		["2030-03-31T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2030-10-27T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2030-10-27T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2031" : helpers.makeTestYear("Asia/Nicosia", [
		["2031-03-30T00:59:59+00:00", "02:59:59", "EET", -120],
		["2031-03-30T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2031-10-26T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2031-10-26T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2032" : helpers.makeTestYear("Asia/Nicosia", [
		["2032-03-28T00:59:59+00:00", "02:59:59", "EET", -120],
		["2032-03-28T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2032-10-31T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2032-10-31T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2033" : helpers.makeTestYear("Asia/Nicosia", [
		["2033-03-27T00:59:59+00:00", "02:59:59", "EET", -120],
		["2033-03-27T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2033-10-30T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2033-10-30T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2034" : helpers.makeTestYear("Asia/Nicosia", [
		["2034-03-26T00:59:59+00:00", "02:59:59", "EET", -120],
		["2034-03-26T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2034-10-29T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2034-10-29T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2035" : helpers.makeTestYear("Asia/Nicosia", [
		["2035-03-25T00:59:59+00:00", "02:59:59", "EET", -120],
		["2035-03-25T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2035-10-28T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2035-10-28T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2036" : helpers.makeTestYear("Asia/Nicosia", [
		["2036-03-30T00:59:59+00:00", "02:59:59", "EET", -120],
		["2036-03-30T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2036-10-26T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2036-10-26T01:00:00+00:00", "03:00:00", "EET", -120]
	]),

	"2037" : helpers.makeTestYear("Asia/Nicosia", [
		["2037-03-29T00:59:59+00:00", "02:59:59", "EET", -120],
		["2037-03-29T01:00:00+00:00", "04:00:00", "EEST", -180],
		["2037-10-25T00:59:59+00:00", "03:59:59", "EEST", -180],
		["2037-10-25T01:00:00+00:00", "03:00:00", "EET", -120]
	])
};