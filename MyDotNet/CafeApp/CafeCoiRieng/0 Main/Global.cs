using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

using CafeModel;
using CafeXML;

namespace CafeCoiRieng
{
    class Global
    {
        static public CafeModel.User User = null;

        static public CafeXML.TrackDaily mTrackDaily = new CafeXML.TrackDaily();
        static public CafeXML.TrackDailyCourse mTrackDailyCourse = new CafeXML.TrackDailyCourse();
        static public CafeXML.TrackDailyDomain mTrackDailyDomain = new CafeXML.TrackDailyDomain();

        static public CafeXML.Category mCategory = new CafeXML.Category();
        static public CafeXML.Course mCourse = new CafeXML.Course();
        static public CafeXML.Domain mDomain = new CafeXML.Domain();
        static public CafeXML.Table mTable = new CafeXML.Table();
        static public CafeXML.Unit mUnit = new CafeXML.Unit();
        static public CafeXML.User mUser = new CafeXML.User();
        static public CafeXML.Employee mEmployee = new CafeXML.Employee();
        static public CafeXML.Customer mCustomer = new CafeXML.Customer();
        static public CafeXML.Session mSession = new CafeXML.Session();
        static public CafeXML.SessionDetail mSessionDetail = new CafeXML.SessionDetail();
    }
}
