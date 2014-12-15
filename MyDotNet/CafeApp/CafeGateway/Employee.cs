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
    public class Employee
    {
        XmlSerializer Serializer;
        const string FilePath = "data\\Employee.xml";
        public Employee()
        {
            Type[] EmployeeTypes = { typeof(CafeModel.Employee) };
            Serializer = new XmlSerializer(typeof(CafeModel.EmployeeList), EmployeeTypes);
        }

        public void DB2XML()
        {
            var mEmployee = new CafeDB.Employee();
            var lstEmployee = new CafeModel.EmployeeList("Nhân viên");
            lstEmployee.list = mEmployee.getAll().ToList<CafeModel.Employee>();

            using (StringWriter writer = new Utf8StringWriter())
            {
                Serializer.Serialize(writer, lstEmployee);
                using (StreamWriter wrt = new StreamWriter(FilePath))
                {
                    wrt.Write(writer.ToString());
                }
            }

        }

        public void XML2DB()
        {
            var mEmployee = new CafeDB.Employee();
            var lstEmployee = new CafeModel.EmployeeList();
            using (StreamReader reader = new StreamReader("sync\\Employee.xml", Encoding.UTF8, true))
            {
                lstEmployee = (CafeModel.EmployeeList)Serializer.Deserialize(reader);
            }

            foreach (var Employee in lstEmployee.list)
            {
                int State = Employee.State;
                //Thêm mới
                if (State == 1)
                {
                    mEmployee.insert(Employee);
                }
                //Cập nhật
                else if (State == 2)
                {
                    mEmployee.update(Employee);
                }
                //Xóa
                else if (State == 3)
                {
                    mEmployee.delete(Employee);
                }
            }

        }

        public CafeModel.EmployeeList XML2List()
        {
            FileStream FileSystemOpen = new FileStream(FilePath, FileMode.Open);
            var EmployeeList = (CafeModel.EmployeeList)Serializer.Deserialize(FileSystemOpen);
            FileSystemOpen.Close();
            return EmployeeList;
        }

        public void List2XML(CafeModel.EmployeeList lstEmployee)
        {
            FileStream FileSystemCreated = new FileStream(FilePath, FileMode.Create);
            Serializer.Serialize(FileSystemCreated, lstEmployee);
            FileSystemCreated.Close();
        }
    }
}
