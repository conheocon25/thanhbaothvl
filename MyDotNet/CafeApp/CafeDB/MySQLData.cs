using System;
using System.Collections.Generic;
using System.Linq;
using System.Data;
using MySql.Data.MySqlClient;

namespace CafeDB
{
    public class MySQLData
    {
        string Server;
        string Database;
        string UID;
        string Password;
        public MySqlConnection Connection;

        public MySQLData()
        {
            //Server = "gator3155.hostgator.com";
            Server = "localhost";
            Database = "spncom_qlcafe_cafecoirieng_desktop";
            UID = "spncom_admindb";
            Password = "admin368189";
            string connectionString = "SERVER=" + Server + ";" + "DATABASE=" +
            Database + ";" + "UID=" + UID + ";" + "PASSWORD=" + Password + ";convert zero datetime=True;Character Set=utf8";

            Connection = new MySqlConnection(connectionString);
        }
        public void open()
        {
            Connection.Open();
        }
        public void close()
        {
            if (Connection.State == System.Data.ConnectionState.Open)
                Connection.Close();
        }
    }
}
