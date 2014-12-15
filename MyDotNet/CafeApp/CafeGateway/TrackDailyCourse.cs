using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Data;
using System.IO;
using System.Text;
using System.Xml;
using System.Xml.Serialization;

using CafeModel;
using CafeDB;

namespace CafeGateway
{
    public class TrackDailyCourse
    {
        XmlSerializer Serializer;
        const string FilePath = "data\\TrackDailyCourse.xml";
        public TrackDailyCourse()
        {
            Type[] TrackDailyCourseTypes = { typeof(CafeModel.TrackDailyCourse) };
            Serializer = new XmlSerializer(typeof(CafeModel.TrackDailyCourseList), TrackDailyCourseTypes);
        }

        public void DB2XML()
        {
            var mTrackDailyCourse = new CafeDB.TrackDailyCourse();
            var lstTrackDailyCourse = new TrackDailyCourseList("Theo dõi món ăn");
            lstTrackDailyCourse.list = mTrackDailyCourse.getAll().ToList<CafeModel.TrackDailyCourse>();

            using (StringWriter writer = new Utf8StringWriter())
            {
                Serializer.Serialize(writer, lstTrackDailyCourse);
                using (StreamWriter wrt = new StreamWriter(FilePath))
                {
                    wrt.Write(writer.ToString());
                }
            }

        }

        public void XML2DB()
        {
            var mTrackDailyCourse = new CafeDB.TrackDailyCourse();
            var lstTrackDailyCourse = new CafeModel.TrackDailyCourseList();
            using (StreamReader reader = new StreamReader(FilePath, Encoding.UTF8, true))
            {
                lstTrackDailyCourse = (CafeModel.TrackDailyCourseList)Serializer.Deserialize(reader);
            }

            foreach (var TrackDailyCourse in lstTrackDailyCourse.list)
            {
                int State = TrackDailyCourse.State;
                //Thêm mới
                if (State == 1)
                {
                    mTrackDailyCourse.insert(TrackDailyCourse);
                }
                //Cập nhật
                else if (State == 2)
                {
                    mTrackDailyCourse.update(TrackDailyCourse);
                }
                //Xóa
                else if (State == 3)
                {
                    mTrackDailyCourse.delete(TrackDailyCourse);
                }
            }

        }

        public CafeModel.TrackDailyCourseList XML2List()
        {
            FileStream FileSystemOpen = new FileStream(FilePath, FileMode.Open);
            var TrackDailyCourseList = (CafeModel.TrackDailyCourseList)Serializer.Deserialize(FileSystemOpen);
            FileSystemOpen.Close();
            return TrackDailyCourseList;
        }

        public void List2XML(CafeModel.TrackDailyCourseList lstTrackDailyCourse)
        {
            FileStream FileSystemCreated = new FileStream(FilePath, FileMode.Create);
            Serializer.Serialize(FileSystemCreated, lstTrackDailyCourse);
            FileSystemCreated.Close();
        }
    }
}
