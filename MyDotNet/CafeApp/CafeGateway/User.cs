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
    public class User
    {
        XmlSerializer Serializer;
        const string FilePath = "data\\User.xml";

        public User()
        {
            Type[] UserTypes = { typeof(CafeModel.User) };
            Serializer = new XmlSerializer(typeof(CafeModel.UserList), UserTypes);
        }

        public void DB2XML()
        {
            var mUser = new CafeDB.User();
            var lstUser = new CafeModel.UserList("Người dùng");
            lstUser.list = mUser.getAll().ToList<CafeModel.User>();

            using (StringWriter writer = new Utf8StringWriter())
            {
                Serializer.Serialize(writer, lstUser);
                using (StreamWriter wrt = new StreamWriter(FilePath))
                {
                    wrt.Write(writer.ToString());
                }
            }

        }

        public void XML2DB()
        {
            var mUser = new CafeDB.User();
            var lstUser = new CafeModel.UserList();
            using (StreamReader reader = new StreamReader(FilePath, Encoding.UTF8, true))
            {
                lstUser = (CafeModel.UserList)Serializer.Deserialize(reader);
            }

            foreach (var User in lstUser.list)
            {
                int State = User.State;
                //Thêm mới
                if (State == 1)
                {
                    mUser.insert(User);
                }
                //Cập nhật
                else if (State == 2)
                {
                    mUser.update(User);
                }
                //Xóa
                else if (State == 3)
                {
                    mUser.delete(User);
                }
            }

        }

        public CafeModel.UserList XML2List()
        {
            FileStream FileSystemOpen = new FileStream(FilePath, FileMode.Open);
            var UserList = (UserList)Serializer.Deserialize(FileSystemOpen);
            FileSystemOpen.Close();
            return UserList;
        }

        public void List2XML(CafeModel.UserList lstUser)
        {
            FileStream FileSystemCreated = new FileStream(FilePath, FileMode.Create);
            Serializer.Serialize(FileSystemCreated, lstUser);
            FileSystemCreated.Close();
        }
    }
}
