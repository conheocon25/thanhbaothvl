using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using MySql.Data.MySqlClient;

using CafeModel;

namespace CafeDB
{
    public class Domain : MySQLData
    {
        //TRUY XUẤT CƠ SỞ DỮ LIỆU
        public IList<CafeModel.Domain> getAll()
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_domain", this.Connection);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            this.close();

            IList<CafeModel.Domain> lstTag = dt.AsEnumerable().Select(row =>
                new CafeModel.Domain(
                    row.Field<long>("id"),
                    row.Field<string>("name")
                )
            ).ToList();
            return lstTag;
        }

        public CafeModel.Domain get(int Id)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_domain WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Id);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            CafeModel.Domain Tag = new CafeModel.Domain(
                dt.Rows[0].Field<long>("id"),
                dt.Rows[0].Field<string>("name")
            );
            this.close();

            return Tag;
        }

        //CẬP NHẬT CƠ SỞ DỮ LIỆU
        public void insert(CafeModel.Domain Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("INSERT INTO cafecoirieng_domain(name) VALUES(@id, @name)", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@name", Obj.Name);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void update(CafeModel.Domain Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("UPDATE cafecoirieng_domain SET name=@name WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@name", Obj.Name);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void delete(CafeModel.Domain Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("DELETE FROM  cafecoirieng_domain WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.ExecuteNonQuery();
            this.close();
        }
    }
}
