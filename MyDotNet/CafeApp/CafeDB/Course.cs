using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using MySql.Data.MySqlClient;

using CafeModel;

namespace CafeDB
{
    public class Course : MySQLData
    {
        //TRUY XUẤT CƠ SỞ DỮ LIỆU
        public IList<CafeModel.Course> getAll()
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_course", this.Connection);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            this.close();

            IList<CafeModel.Course> lstTag = dt.AsEnumerable().Select(row =>
                new CafeModel.Course(
                    row.Field<long>("id"),
                    row.Field<long>("idcategory"),
                    row.Field<string>("name"),
                    row.Field<string>("unit"),
                    row.Field<long>("price1"),
                    row.Field<int>("prepare"),
                    row.Field<int>("isdiscount"),
                    row.Field<int>("enable")
                )
            ).ToList();
            return lstTag;
        }

        public CafeModel.Course get(int Id)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_course WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Id);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            CafeModel.Course Tag = new CafeModel.Course(
                dt.Rows[0].Field<long>("id"),
                dt.Rows[0].Field<long>("idcategory"),
                dt.Rows[0].Field<string>("name"),
                dt.Rows[0].Field<string>("unit"),
                dt.Rows[0].Field<long>("price1"),
                dt.Rows[0].Field<int>("prepare"),
                dt.Rows[0].Field<int>("isdiscount"),
                dt.Rows[0].Field<int>("enable")
            );
            this.close();

            return Tag;
        }

        //CẬP NHẬT CƠ SỞ DỮ LIỆU
        public void insert(CafeModel.Course Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("INSERT INTO cafecoirieng_course(id, idcategory, name, unit, price1, prepare, isdiscount, enable) VALUES(@id, @idcategory, @name, @unit, @price1, @prepare, @isdiscount, @enable)", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@idcategory", Obj.IdCategory);
            cmd.Parameters.AddWithValue("@name", Obj.Name);
            cmd.Parameters.AddWithValue("@unit", Obj.Unit);
            cmd.Parameters.AddWithValue("@price1", Obj.Price);
            cmd.Parameters.AddWithValue("@prepare", Obj.Prepare);
            cmd.Parameters.AddWithValue("@isdiscount", Obj.IsDiscount);
            cmd.Parameters.AddWithValue("@enable", Obj.Enable);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void update(CafeModel.Course Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("UPDATE cafecoirieng_course SET id=@id, id_category=@idcategory, name=@name, unit=@unit, price1=@price1, prepare=@prepare, is_discount=@isdiscount, enable=@enable WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@idcategory", Obj.IdCategory);
            cmd.Parameters.AddWithValue("@name", Obj.Name);
            cmd.Parameters.AddWithValue("@unit", Obj.Unit);
            cmd.Parameters.AddWithValue("@price1", Obj.Price);
            cmd.Parameters.AddWithValue("@prepare", Obj.Prepare);
            cmd.Parameters.AddWithValue("@isdiscount", Obj.IsDiscount);
            cmd.Parameters.AddWithValue("@enable", Obj.Enable);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void delete(CafeModel.Course Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("DELETE FROM  cafecoirieng_course WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.ExecuteNonQuery();
            this.close();
        }
    }
}
