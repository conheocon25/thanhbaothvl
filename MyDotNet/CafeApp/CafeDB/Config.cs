using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using MySql.Data.MySqlClient;

using CafeModel;

namespace CafeDB
{
    class Config : MySQLData
    {
        //TRUY XUẤT CƠ SỞ DỮ LIỆU
        public IList<Config> getAll()
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_Config", this.Connection);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            this.close();

            IList<Config> lstTag = dt.AsEnumerable().Select(row =>
                new Config()
                /*
                    row.Field<int>("id"),
                    row.Field<int>("id_category"),
                    row.Field<string>("name"),
                    row.Field<string>("unit"),
                    row.Field<long>("price"),
                    row.Field<int>("prepare"),
                    row.Field<bool>("discount"),
                    row.Field<bool>("enable")
                )*/
            ).ToList();
            return lstTag;
        }

        public Config get(int Id)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_Config WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Id);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            Config Tag = new Config(
                /*
                dt.Rows[0].Field<int>("id"),
                dt.Rows[0].Field<int>("id_category"),
                dt.Rows[0].Field<string>("name"),
                dt.Rows[0].Field<string>("unit"),
                dt.Rows[0].Field<long>("price"),
                dt.Rows[0].Field<int>("prepare"),
                dt.Rows[0].Field<bool>("discount"),
                dt.Rows[0].Field<bool>("enable")
                 */
            );
            this.close();

            return Tag;
        }

        //CẬP NHẬT CƠ SỞ DỮ LIỆU
        public void insert(Config Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("INSERT INTO cafecoirieng_Config(name) VALUES(@id, @name)", this.Connection);
            //cmd.Parameters.AddWithValue("@id", Obj.Id);
            //cmd.Parameters.AddWithValue("@name", Obj.Name);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void update(Config Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("UPDATE cafecoirieng_Config SET name=@name WHERE id=@id", this.Connection);
            //cmd.Parameters.AddWithValue("@id", Obj.Id);
            //cmd.Parameters.AddWithValue("@name", Obj.Name);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void delete(Config Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("DELETE FROM  cafecoirieng_Config WHERE id=@id", this.Connection);
            //cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.ExecuteNonQuery();
            this.close();
        }
    }
}
