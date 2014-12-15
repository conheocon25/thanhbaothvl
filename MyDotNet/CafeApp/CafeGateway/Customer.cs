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
    public class Customer
    {
        XmlSerializer Serializer;
        const string FilePath = "data\\Customer.xml";
        public Customer()
        {
            Type[] CustomerTypes = { typeof(CafeModel.Customer) };
            Serializer = new XmlSerializer(typeof(CafeModel.CustomerList), CustomerTypes);
        }

        public void DB2XML()
        {
            var mCustomer = new CafeDB.Customer();
            var lstCustomer = new CustomerList("Khách hàng");
            lstCustomer.list = mCustomer.getAll().ToList<CafeModel.Customer>();

            using (StringWriter writer = new Utf8StringWriter())
            {
                Serializer.Serialize(writer, lstCustomer);
                using (StreamWriter wrt = new StreamWriter(FilePath))
                {
                    wrt.Write(writer.ToString());
                }
            }

        }

        public void XML2DB()
        {
            var mCustomer = new CafeDB.Customer();
            var lstCustomer = new CafeModel.CustomerList();
            using (StreamReader reader = new StreamReader(FilePath, Encoding.UTF8, true))
            {
                lstCustomer = (CafeModel.CustomerList)Serializer.Deserialize(reader);
            }

            foreach (var Customer in lstCustomer.list)
            {
                int State = Customer.State;
                //Thêm mới
                if (State == 1)
                {
                    mCustomer.insert(Customer);
                }
                //Cập nhật
                else if (State == 2)
                {
                    mCustomer.update(Customer);
                }
                //Xóa
                else if (State == 3)
                {
                    mCustomer.delete(Customer);
                }
            }

        }

        public CafeModel.CustomerList XML2List()
        {
            FileStream FileSystemOpen = new FileStream(FilePath, FileMode.Open);
            var CustomerList = (CustomerList)Serializer.Deserialize(FileSystemOpen);
            FileSystemOpen.Close();
            return CustomerList;
        }

        public void List2XML(CafeModel.CustomerList lstCustomer)
        {
            FileStream FileSystemCreated = new FileStream(FilePath, FileMode.Create);
            Serializer.Serialize(FileSystemCreated, lstCustomer);
            FileSystemCreated.Close();
        }
    }
}
