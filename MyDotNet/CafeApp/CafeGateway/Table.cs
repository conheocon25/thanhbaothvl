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
    public class Table
    {
        XmlSerializer Serializer;
        const string FilePath = "data\\Table.xml";
        public Table()
        {
            Type[] TableTypes = { typeof(CafeModel.Table) };
            Serializer = new XmlSerializer(typeof(CafeModel.TableList), TableTypes);
        }

        public void DB2XML()
        {
            var mTable = new CafeDB.Table();
            var lstTable = new TableList("Danh mục");
            lstTable.list = mTable.getAll().ToList<CafeModel.Table>();

            using (StringWriter writer = new Utf8StringWriter())
            {
                Serializer.Serialize(writer, lstTable);
                using (StreamWriter wrt = new StreamWriter(FilePath))
                {
                    wrt.Write(writer.ToString());
                }
            }

        }

        public void XML2DB()
        {
            var mTable = new CafeDB.Table();
            var lstTable = new CafeModel.TableList();
            using (StreamReader reader = new StreamReader(FilePath, Encoding.UTF8, true))
            {
                lstTable = (CafeModel.TableList)Serializer.Deserialize(reader);
            }

            foreach (var Table in lstTable.list)
            {
                int State = Table.State;
                //Thêm mới
                if (State == 1)
                {
                    mTable.insert(Table);
                }
                //Cập nhật
                else if (State == 2)
                {
                    mTable.update(Table);
                }
                //Xóa
                else if (State == 3)
                {
                    mTable.delete(Table);
                }
            }

        }

        public CafeModel.TableList XML2List()
        {
            FileStream FileSystemOpen = new FileStream(FilePath, FileMode.Open);
            var TableList = (CafeModel.TableList)Serializer.Deserialize(FileSystemOpen);
            FileSystemOpen.Close();
            return TableList;
        }

        public void List2XML(CafeModel.TableList lstTable)
        {
            FileStream FileSystemCreated = new FileStream(FilePath, FileMode.Create);
            Serializer.Serialize(FileSystemCreated, lstTable);
            FileSystemCreated.Close();
        }
    }
}
