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
    public class Domain
    {
        XmlSerializer Serializer;
        const string FilePath = "data\\Domain.xml";
        public Domain()
        {
            Type[] DomainTypes = { typeof(CafeModel.Domain) };
            Serializer = new XmlSerializer(typeof(CafeModel.DomainList), DomainTypes);
        }

        public void DB2XML()
        {
            var mDomain = new CafeDB.Domain();
            var lstDomain = new CafeModel.DomainList("Khu vực");
            lstDomain.list = mDomain.getAll().ToList<CafeModel.Domain>();

            using (StringWriter writer = new Utf8StringWriter())
            {
                Serializer.Serialize(writer, lstDomain);
                using (StreamWriter wrt = new StreamWriter(FilePath))
                {
                    wrt.Write(writer.ToString());
                }
            }

        }

        public void XML2DB()
        {
            var mDomain = new CafeDB.Domain();
            var lstDomain = new CafeModel.DomainList();
            using (StreamReader reader = new StreamReader(FilePath, Encoding.UTF8, true))
            {
                lstDomain = (CafeModel.DomainList)Serializer.Deserialize(reader);
            }

            foreach (var Domain in lstDomain.list)
            {
                int State = Domain.State;
                //Thêm mới
                if (State == 1)
                {
                    mDomain.insert(Domain);
                }
                //Cập nhật
                else if (State == 2)
                {
                    mDomain.update(Domain);
                }
                //Xóa
                else if (State == 3)
                {
                    mDomain.delete(Domain);
                }
            }

        }

        public CafeModel.DomainList XML2List()
        {
            FileStream FileSystemOpen = new FileStream(FilePath, FileMode.Open);
            var DomainList = (CafeModel.DomainList)Serializer.Deserialize(FileSystemOpen);
            FileSystemOpen.Close();
            return DomainList;
        }

        public void List2XML(CafeModel.DomainList lstDomain)
        {
            FileStream FileSystemCreated = new FileStream(FilePath, FileMode.Create);
            Serializer.Serialize(FileSystemCreated, lstDomain);
            FileSystemCreated.Close();
        }
    }
}
