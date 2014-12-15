using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using MySql.Data.MySqlClient;

using CafeModel;

namespace CafeDB
{
    public class TrackDaily : MySQLData
    {
        //TRUY XUẤT CƠ SỞ DỮ LIỆU
        public IList<CafeModel.TrackDaily> getAll()
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_track_daily", this.Connection);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            this.close();

            var lstTag = dt.AsEnumerable().Select(row =>
                new CafeModel.TrackDaily(                
                    row.Field<long>("id"),                    
                    row.Field<string>("table_name"),
                    row.Field<string>("customer_name"),
                    row.Field<string>("employee_name"),
                    row.Field<DateTime>("date_time"),
                    row.Field<long>("value")
                )
            ).ToList();
            return lstTag;
        }

        public CafeModel.TrackDaily get(int Id)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_track_daily WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Id);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            var Obj = new CafeModel.TrackDaily(
                dt.Rows[0].Field<long>("id"),
                dt.Rows[0].Field<string>("table_name"),
                dt.Rows[0].Field<string>("customer_name"),
                dt.Rows[0].Field<string>("employee_name"),
                dt.Rows[0].Field<DateTime>("date_time"),
                dt.Rows[0].Field<long>("value")                
            );
            this.close();

            return Obj;
        }

        //CẬP NHẬT CƠ SỞ DỮ LIỆU
        public void insert(CafeModel.TrackDaily Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("INSERT INTO cafecoirieng_track_daily(id, table_name, customer_name, date_time, value) VALUES(@id, @table_name, @customer_name, @date_time, @value)", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@table_name", Obj.TableName);
            cmd.Parameters.AddWithValue("@customer_name", Obj.CustomerName);
            cmd.Parameters.AddWithValue("@date_time", Obj.DateTime);
            cmd.Parameters.AddWithValue("@value", Obj.Value);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void update(CafeModel.TrackDaily Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("UPDATE cafecoirieng_track_daily SET id=@id, table_name=@table_name, customer_name=@customer_name, date_time=@date_time, value=@value WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@table_name", Obj.TableName);
            cmd.Parameters.AddWithValue("@customer_name", Obj.CustomerName);
            cmd.Parameters.AddWithValue("@date_time", Obj.DateTime);
            cmd.Parameters.AddWithValue("@value", Obj.Value);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void delete(CafeModel.TrackDaily Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("DELETE FROM  cafecoirieng_track_daily WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.ExecuteNonQuery();
            this.close();
        }
    }
}