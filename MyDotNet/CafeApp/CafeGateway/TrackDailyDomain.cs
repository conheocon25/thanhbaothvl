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
    public class TrackDailyDomain
    {
        XmlSerializer Serializer;
        const string FilePath = "data\\TrackDailyDomain.xml";
        public TrackDailyDomain()
        {
            Type[] TrackDailyDomainTypes = { typeof(CafeModel.TrackDailyDomain) };
            Serializer = new XmlSerializer(typeof(CafeModel.TrackDailyDomainList), TrackDailyDomainTypes);
        }

        public void DB2XML()
        {
            var mTrackDailyDomain = new CafeDB.TrackDailyDomain();
            var lstTrackDailyDomain = new TrackDailyDomainList("Theo dõi khu vực");
            lstTrackDailyDomain.list = mTrackDailyDomain.getAll().ToList<CafeModel.TrackDailyDomain>();

            using (StringWriter writer = new Utf8StringWriter())
            {
                Serializer.Serialize(writer, lstTrackDailyDomain);
                using (StreamWriter wrt = new StreamWriter(FilePath))
                {
                    wrt.Write(writer.ToString());
                }
            }

        }

        public void XML2DB()
        {
            var mTrackDailyDomain = new CafeDB.TrackDailyDomain();
            var lstTrackDailyDomain = new CafeModel.TrackDailyDomainList();
            using (StreamReader reader = new StreamReader(FilePath, Encoding.UTF8, true))
            {
                lstTrackDailyDomain = (CafeModel.TrackDailyDomainList)Serializer.Deserialize(reader);
            }

            foreach (var TrackDailyDomain in lstTrackDailyDomain.list)
            {
                int State = TrackDailyDomain.State;
                //Thêm mới
                if (State == 1)
                {
                    mTrackDailyDomain.insert(TrackDailyDomain);
                }
                //Cập nhật
                else if (State == 2)
                {
                    mTrackDailyDomain.update(TrackDailyDomain);
                }
                //Xóa
                else if (State == 3)
                {
                    mTrackDailyDomain.delete(TrackDailyDomain);
                }
            }

        }

        public CafeModel.TrackDailyDomainList XML2List()
        {
            FileStream FileSystemOpen = new FileStream(FilePath, FileMode.Open);
            var TrackDailyDomainList = (CafeModel.TrackDailyDomainList)Serializer.Deserialize(FileSystemOpen);
            FileSystemOpen.Close();
            return TrackDailyDomainList;
        }

        public void List2XML(CafeModel.TrackDailyDomainList lstTrackDailyDomain)
        {
            FileStream FileSystemCreated = new FileStream(FilePath, FileMode.Create);
            Serializer.Serialize(FileSystemCreated, lstTrackDailyDomain);
            FileSystemCreated.Close();
        }
    }
}
