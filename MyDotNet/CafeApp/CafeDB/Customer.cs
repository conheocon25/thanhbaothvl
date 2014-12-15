using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using MySql.Data.MySqlClient;

using CafeModel;

namespace CafeDB
{
    public class Customer : MySQLData
    {
        //TRUY XUẤT CƠ SỞ DỮ LIỆU
        public IList<CafeModel.Customer> getAll()
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_customer", this.Connection);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            this.close();

            IList<CafeModel.Customer> lstTag = dt.AsEnumerable().Select(row =>
                new CafeModel.Customer(
                        row.Field<long>("id"),
                        row.Field<string>("name"),
                        row.Field<int>("type"),
                        row.Field<string>("card"),
                        row.Field<string>("phone"),
                        row.Field<string>("address"),
                        row.Field<string>("note"),
                        row.Field<int>("discount"),
                        0
                    )
            ).ToList();
            return lstTag;
        }

        public CafeModel.Customer get(int Id)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_customer WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Id);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            CafeModel.Customer Tag = new CafeModel.Customer(
                dt.Rows[0].Field<long>("id"),
                dt.Rows[0].Field<string>("name"),
                dt.Rows[0].Field<int>("type"),
                dt.Rows[0].Field<string>("card"),
                dt.Rows[0].Field<string>("phone"),
                dt.Rows[0].Field<string>("address"),
                dt.Rows[0].Field<string>("note"),
                dt.Rows[0].Field<int>("discount")
            );
            this.close();

            return Tag;
        }

        //CẬP NHẬT CƠ SỞ DỮ LIỆU
        public void insert(CafeModel.Customer Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("INSERT INTO cafecoirieng_customer(id, name, type, card, phone, address, note, discount) VALUES(@id, @name, @type, @card, @phone, @address, @note, @discount)", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@name", Obj.Name);
            cmd.Parameters.AddWithValue("@type", Obj.Type);
            cmd.Parameters.AddWithValue("@card", Obj.Card);
            cmd.Parameters.AddWithValue("@phone", Obj.Phone);
            cmd.Parameters.AddWithValue("@address", Obj.Address);
            cmd.Parameters.AddWithValue("@note", Obj.Note);
            cmd.Parameters.AddWithValue("@discount", Obj.Discount);

            cmd.ExecuteNonQuery();
            this.close();
        }

        public void update(CafeModel.Customer Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("UPDATE cafecoirieng_customer SET id=@id, name=@name, type=@type, card=@card, phone=@phone, address=@address, note=@note, discount=@discount WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@name", Obj.Name);
            cmd.Parameters.AddWithValue("@type", Obj.Type);
            cmd.Parameters.AddWithValue("@card", Obj.Card);
            cmd.Parameters.AddWithValue("@phone", Obj.Phone);
            cmd.Parameters.AddWithValue("@address", Obj.Address);
            cmd.Parameters.AddWithValue("@note", Obj.Note);
            cmd.Parameters.AddWithValue("@discount", Obj.Discount);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void delete(CafeModel.Customer Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("DELETE FROM  cafecoirieng_customer WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.ExecuteNonQuery();
            this.close();
        }
    }
}
