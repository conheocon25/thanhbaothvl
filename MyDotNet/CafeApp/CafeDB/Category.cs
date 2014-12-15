using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using MySql.Data;
using MySql.Data.MySqlClient;

using CafeModel;

namespace CafeDB
{
    public class Category : MySQLData
    {
        //TRUY XUẤT CƠ SỞ DỮ LIỆU
        public IList<CafeModel.Category> getAll()
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_category", this.Connection);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            this.close();

            IList<CafeModel.Category> lstTag = dt.AsEnumerable().Select(row =>
                new CafeModel.Category(
                    row.Field<long>("id"),
                    row.Field<string>("name")
                )
            ).ToList();
            return lstTag;
        }

        public CafeModel.Category get(int Id)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_category WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Id);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            var Tag = new CafeModel.Category(
                dt.Rows[0].Field<long>("id"),
                dt.Rows[0].Field<string>("name")
            );
            this.close();

            return Tag;
        }

        //CẬP NHẬT CƠ SỞ DỮ LIỆU
        public void insert(CafeModel.Category Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("INSERT INTO cafecoirieng_category(id, name) VALUES(@id, @name)", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@name", Obj.Name);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void update(CafeModel.Category Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("UPDATE cafecoirieng_category SET name=@name WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@name", Obj.Name);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void delete(CafeModel.Category Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("DELETE FROM  cafecoirieng_category WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.ExecuteNonQuery();
            this.close();
        }
    }
}
