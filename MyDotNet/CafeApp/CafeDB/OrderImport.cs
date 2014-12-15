using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using MySql.Data.MySqlClient;

using CafeModel;

namespace CafeDB
{
    public class OrderImport:MySQLData
    {
        //TRUY XUẤT CƠ SỞ DỮ LIỆU
        public IList<OrderImport> getAll()
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_OrderImport", this.Connection);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            this.close();

            IList<OrderImport> lstTag = dt.AsEnumerable().Select(row =>
                new OrderImport()
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

        public OrderImport get(int Id)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_OrderImport WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Id);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            OrderImport Tag = new OrderImport(
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
        public void insert(OrderImport Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("INSERT INTO cafecoirieng_OrderImport(name) VALUES(@id, @name)", this.Connection);
            //cmd.Parameters.AddWithValue("@id", Obj.Id);
            //cmd.Parameters.AddWithValue("@name", Obj.Name);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void update(OrderImport Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("UPDATE cafecoirieng_OrderImport SET name=@name WHERE id=@id", this.Connection);
            //cmd.Parameters.AddWithValue("@id", Obj.Id);
            //cmd.Parameters.AddWithValue("@name", Obj.Name);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void delete(OrderImport Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("DELETE FROM  cafecoirieng_OrderImport WHERE id=@id", this.Connection);
            //cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.ExecuteNonQuery();
            this.close();
        }
    }
}
