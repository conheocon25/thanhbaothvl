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
    public class SessionDetail
    {
        XmlSerializer Serializer;
        const string FilePath = "data\\SessionDetail.xml";
        public SessionDetail()
        {
            Type[] SessionDetailTypes = { typeof(CafeModel.SessionDetail) };
            Serializer = new XmlSerializer(typeof(CafeModel.SessionDetailList), SessionDetailTypes);
        }

        public void DB2XML()
        {
            var mSessionDetail = new CafeDB.SessionDetail();
            var lstSessionDetail = new CafeModel.SessionDetailList("Chi tiết giao dịch");
            lstSessionDetail.list = mSessionDetail.getAllSynC(DateTime.Now.Date).ToList<CafeModel.SessionDetail>();

            using (StringWriter writer = new Utf8StringWriter())
            {
                Serializer.Serialize(writer, lstSessionDetail);
                using (StreamWriter wrt = new StreamWriter(FilePath))
                {
                    wrt.Write(writer.ToString());
                }
            }

        }

        public void XML2DB()
        {
            var mSessionDetail = new CafeDB.SessionDetail();
            var lstSessionDetail = new CafeModel.SessionDetailList();
            using (StreamReader reader = new StreamReader(FilePath, Encoding.UTF8, true))
            {
                lstSessionDetail = (CafeModel.SessionDetailList)Serializer.Deserialize(reader);
            }

            foreach (var SessionDetail in lstSessionDetail.list)
            {
                int State = SessionDetail.State;
                //Thêm mới
                if (State == 1)
                {
                    mSessionDetail.insert(SessionDetail);
                }
                //Cập nhật
                else if (State == 2)
                {
                    mSessionDetail.update(SessionDetail);
                }
                //Xóa
                else if (State == 3)
                {
                    mSessionDetail.delete(SessionDetail);
                }
            }

        }

        public CafeModel.SessionDetailList XML2List()
        {
            FileStream FileSystemOpen = new FileStream(FilePath, FileMode.Open);
            var SessionDetailList = (CafeModel.SessionDetailList)Serializer.Deserialize(FileSystemOpen);
            FileSystemOpen.Close();
            return SessionDetailList;
        }

        public void List2XML(CafeModel.SessionDetailList lstSessionDetail)
        {
            FileStream FileSystemCreated = new FileStream(FilePath, FileMode.Create);
            Serializer.Serialize(FileSystemCreated, lstSessionDetail);
            FileSystemCreated.Close();
        }
    }
}
