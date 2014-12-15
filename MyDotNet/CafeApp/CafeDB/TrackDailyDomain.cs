using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using MySql.Data.MySqlClient;

using CafeModel;

namespace CafeDB
{
    public class TrackDailyDomain : MySQLData
    {
        //TRUY XUẤT CƠ SỞ DỮ LIỆU
        public IList<CafeModel.TrackDailyDomain> getAll()
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_track_daily_domain", this.Connection);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            this.close();

            var lstTag = dt.AsEnumerable().Select(row =>
                new CafeModel.TrackDailyDomain(
                    row.Field<long>("id"),
                    row.Field<long>("id_domain"),
                    row.Field<string>("domain_name"),
                    row.Field<DateTime>("date_time"),
                    row.Field<long>("value")
                )
            ).ToList();
            return lstTag;
        }

        public CafeModel.TrackDailyDomain get(int Id)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_track_daily_domain WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Id);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            var Obj = new CafeModel.TrackDailyDomain(
                dt.Rows[0].Field<long>("id"),
                dt.Rows[0].Field<long>("id_domain"),
                dt.Rows[0].Field<string>("domain_name"),
                dt.Rows[0].Field<DateTime>("date_time"),
                dt.Rows[0].Field<long>("value")
            );
            this.close();

            return Obj;
        }

        //CẬP NHẬT CƠ SỞ DỮ LIỆU
        public void insert(CafeModel.TrackDailyDomain Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("INSERT INTO cafecoirieng_track_daily_domain(id, id_domain, domain_name, date_time, value) VALUES(@id, @id_domain, @domain_name, @date_time, @value)", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@id_domain", Obj.IdDomain);
            cmd.Parameters.AddWithValue("@domain_name", Obj.DomainName);
            cmd.Parameters.AddWithValue("@date_time", Obj.DateTime);
            cmd.Parameters.AddWithValue("@value", Obj.Value);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void update(CafeModel.TrackDailyDomain Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("UPDATE cafecoirieng_track_daily_domain SET id=@id, id_domain=@id_domain, domain_name=@domain_name, date_time=@date_time, value=@value  WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@id_domain", Obj.IdDomain);
            cmd.Parameters.AddWithValue("@domain_name", Obj.DomainName);
            cmd.Parameters.AddWithValue("@date_time", Obj.DateTime);
            cmd.Parameters.AddWithValue("@value", Obj.Value);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void delete(CafeModel.TrackDailyDomain Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("DELETE FROM  cafecoirieng_track_daily_domain WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.ExecuteNonQuery();
            this.close();
        }
    }
}
