using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using MySql.Data.MySqlClient;

using CafeModel;

namespace CafeDB
{
    public class User : MySQLData
    {
        //TRUY XUẤT CƠ SỞ DỮ LIỆU
        public IList<CafeModel.User> getAll()
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_user", this.Connection);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            this.close();

            IList<CafeModel.User> lstObj = dt.AsEnumerable().Select(row =>
                new CafeModel.User(
                    row.Field<long>("id"),
                    row.Field<string>("name"),
                    row.Field<string>("email"),
                    row.Field<string>("pass"),
                    row.Field<int>("gender"),
                    row.Field<string>("note"),
                    row.Field<DateTime>("datecreate"),
                    row.Field<DateTime>("dateupdate"),
                    row.Field<DateTime>("dateactivity"),
                    row.Field<int>("type"),
                    row.Field<string>("code")
                )
            ).ToList();
            return lstObj;
        }

        public CafeModel.User get(int Id)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_user WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Id);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            CafeModel.User Tag = new CafeModel.User(
                dt.Rows[0].Field<long>("id"),
                dt.Rows[0].Field<string>("name"),
                dt.Rows[0].Field<string>("email"),
                dt.Rows[0].Field<string>("pass"),
                dt.Rows[0].Field<int>("gender"),
                dt.Rows[0].Field<string>("note"),
                dt.Rows[0].Field<DateTime>("datecreate"),
                dt.Rows[0].Field<DateTime>("dateupdate"),
                dt.Rows[0].Field<DateTime>("dateactivity"),
                dt.Rows[0].Field<int>("type"),
                dt.Rows[0].Field<string>("code")
            );
            this.close();

            return Tag;
        }

        //CẬP NHẬT CƠ SỞ DỮ LIỆU
        public void insert(CafeModel.User Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("INSERT INTO cafecoirieng_user(id, name, email, pass, gender, note, date_created, date_updated, date_activity, type, code) VALUES(@id, @name, @email, @pass, @gender, @note, @date_created, @date_updated, @date_activity, @type, @code)", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@name", Obj.Name);
            cmd.Parameters.AddWithValue("@email", Obj.Email);
            cmd.Parameters.AddWithValue("@pass", Obj.Email);
            cmd.Parameters.AddWithValue("@gender", Obj.Gender);
            cmd.Parameters.AddWithValue("@note", Obj.Note);
            cmd.Parameters.AddWithValue("@datecreate", Obj.DateCreated);
            cmd.Parameters.AddWithValue("@dateupdate", Obj.DateUpdated);
            cmd.Parameters.AddWithValue("@dat_activity", Obj.DateActivity);
            cmd.Parameters.AddWithValue("@type", Obj.Type);
            cmd.Parameters.AddWithValue("@code", Obj.Code);

            cmd.ExecuteNonQuery();
            this.close();
        }

        public void update(CafeModel.User Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("UPDATE cafecoirieng_user SET name=@name, email=@email, pass=@pass, gender=@gender, note=@note, date_created=@date_created, date_updated=@date_updated, date_activity=@date_activity, type=@type, code=@code WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@name", Obj.Name);
            cmd.Parameters.AddWithValue("@email", Obj.Email);
            cmd.Parameters.AddWithValue("@pass", Obj.Email);
            cmd.Parameters.AddWithValue("@gender", Obj.Gender);
            cmd.Parameters.AddWithValue("@note", Obj.Note);
            cmd.Parameters.AddWithValue("@datecreate", Obj.DateCreated);
            cmd.Parameters.AddWithValue("@dateupdate", Obj.DateUpdated);
            cmd.Parameters.AddWithValue("@dateactivity", Obj.DateActivity);
            cmd.Parameters.AddWithValue("@type", Obj.Type);
            cmd.Parameters.AddWithValue("@code", Obj.Code);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void delete(CafeModel.User Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("DELETE FROM  cafecoirieng_user WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.ExecuteNonQuery();
            this.close();
        }
    }
}
