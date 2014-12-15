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
    public class Unit
    {
       
        XmlSerializer Serializer;
        const string FilePath = "data\\Unit.xml";
        public Unit()
        {
            Type[] UnitTypes = { typeof(CafeModel.Unit) };
            Serializer = new XmlSerializer(typeof(CafeModel.UnitList), UnitTypes);
        }

        public void DB2XML()
        {
            var mUnit = new CafeDB.Unit();
            var lstUnit = new CafeModel.UnitList("Đơn vị tính");
            lstUnit.list = mUnit.getAll().ToList<CafeModel.Unit>();

            using (StringWriter writer = new Utf8StringWriter())
            {
                Serializer.Serialize(writer, lstUnit);
                using (StreamWriter wrt = new StreamWriter(FilePath))
                {
                    wrt.Write(writer.ToString());
                }
            }

        }

        public void XML2DB()
        {
            var mUnit = new CafeDB.Unit();
            var lstUnit = new CafeModel.UnitList();
            using (StreamReader reader = new StreamReader(FilePath, Encoding.UTF8, true))
            {
                lstUnit = (CafeModel.UnitList)Serializer.Deserialize(reader);
            }

            foreach (var Unit in lstUnit.list)
            {
                int State = Unit.State;
                //Thêm mới
                if (State == 1)
                {
                    mUnit.insert(Unit);
                }
                //Cập nhật
                else if (State == 2)
                {
                    mUnit.update(Unit);
                }
                //Xóa
                else if (State == 3)
                {
                    mUnit.delete(Unit);
                }
            }

        }

        public CafeModel.UnitList XML2List()
        {
            FileStream FileSystemOpen = new FileStream(FilePath, FileMode.Open);
            var UnitList = (CafeModel.UnitList)Serializer.Deserialize(FileSystemOpen);
            FileSystemOpen.Close();
            return UnitList;
        }

        public void List2XML(CafeModel.UnitList lstUnit)
        {
            FileStream FileSystemCreated = new FileStream(FilePath, FileMode.Create);
            Serializer.Serialize(FileSystemCreated, lstUnit);
            FileSystemCreated.Close();
        }
    }
}
