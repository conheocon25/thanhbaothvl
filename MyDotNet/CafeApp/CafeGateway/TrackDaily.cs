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
    public class TrackDaily
    {
        XmlSerializer Serializer;
        const string FilePath = "data\\TrackDaily.xml";
        public TrackDaily()
        {
            Type[] TrackDailyTypes = { typeof(CafeModel.TrackDaily) };
            Serializer = new XmlSerializer(typeof(CafeModel.TrackDailyList), TrackDailyTypes);
        }

        public void DB2XML()
        {
            var mTrackDaily = new CafeDB.TrackDaily();
            var lstTrackDaily = new TrackDailyList("Theo dõi phiếu");
            lstTrackDaily.list = mTrackDaily.getAll().ToList<CafeModel.TrackDaily>();

            using (StringWriter writer = new Utf8StringWriter())
            {
                Serializer.Serialize(writer, lstTrackDaily);
                using (StreamWriter wrt = new StreamWriter(FilePath))
                {
                    wrt.Write(writer.ToString());
                }
            }

        }

        public void XML2DB()
        {
            var mTrackDaily = new CafeDB.TrackDaily();
            var lstTrackDaily = new CafeModel.TrackDailyList();
            using (StreamReader reader = new StreamReader(FilePath, Encoding.UTF8, true))
            {
                lstTrackDaily = (CafeModel.TrackDailyList)Serializer.Deserialize(reader);
            }

            foreach (var TrackDaily in lstTrackDaily.list)
            {
                int State = TrackDaily.State;
                //Thêm mới
                if (State == 1)
                {
                    mTrackDaily.insert(TrackDaily);
                }
                //Cập nhật
                else if (State == 2)
                {
                    mTrackDaily.update(TrackDaily);
                }
                //Xóa
                else if (State == 3)
                {
                    mTrackDaily.delete(TrackDaily);
                }
            }

        }

        public CafeModel.TrackDailyList XML2List()
        {
            FileStream FileSystemOpen = new FileStream(FilePath, FileMode.Open);
            var TrackDailyList = (CafeModel.TrackDailyList)Serializer.Deserialize(FileSystemOpen);
            FileSystemOpen.Close();
            return TrackDailyList;
        }

        public void List2XML(CafeModel.TrackDailyList lstTrackDaily)
        {
            FileStream FileSystemCreated = new FileStream(FilePath, FileMode.Create);
            Serializer.Serialize(FileSystemCreated, lstTrackDaily);
            FileSystemCreated.Close();
        }
    }
}
