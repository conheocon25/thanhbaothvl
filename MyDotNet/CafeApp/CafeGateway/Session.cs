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
    public class Session
    {
        XmlSerializer Serializer;
        const string FilePath = "data\\Session.xml";
        public Session()
        {
            Type[] SessionTypes = { typeof(CafeModel.Session) };
            Serializer = new XmlSerializer(typeof(CafeModel.SessionList), SessionTypes);
        }

        public void DB2XML()
        {
            var mSession = new CafeDB.Session();
            var lstSession = new CafeModel.SessionList("Khu vực");
            lstSession.list = mSession.getAllSynC().ToList<CafeModel.Session>();

            using (StringWriter writer = new Utf8StringWriter())
            {
                Serializer.Serialize(writer, lstSession);
                using (StreamWriter wrt = new StreamWriter(FilePath))
                {
                    wrt.Write(writer.ToString());
                }
            }
        }

        public void XML2DB()
        {
            var mSession = new CafeDB.Session();
            var lstSession = new CafeModel.SessionList();
            using (StreamReader reader = new StreamReader(FilePath, Encoding.UTF8, true))
            {
                lstSession = (CafeModel.SessionList)Serializer.Deserialize(reader);
            }

            foreach (var Session in lstSession.list)
            {
                int State = Session.State;
                //Thêm mới
                if (State == 1)
                {
                    mSession.insert(Session);
                }
                //Cập nhật
                else if (State == 2)
                {
                    mSession.update(Session);
                }
                //Xóa
                else if (State == 3)
                {
                    mSession.delete(Session);
                }
            }

        }

        public CafeModel.SessionList XML2List()
        {
            FileStream FileSystemOpen = new FileStream(FilePath, FileMode.Open);
            var SessionList = (CafeModel.SessionList)Serializer.Deserialize(FileSystemOpen);
            FileSystemOpen.Close();
            return SessionList;
        }

        public void List2XML(CafeModel.SessionList lstSession)
        {
            FileStream FileSystemCreated = new FileStream(FilePath, FileMode.Create);
            Serializer.Serialize(FileSystemCreated, lstSession);
            FileSystemCreated.Close();
        }
    }
}
