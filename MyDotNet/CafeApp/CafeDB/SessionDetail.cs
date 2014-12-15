using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using MySql.Data.MySqlClient;

using CafeModel;

namespace CafeDB
{
    public class SessionDetail : MySQLData
    {
        //TRUY XUẤT CƠ SỞ DỮ LIỆU
        public IList<CafeModel.SessionDetail> getAll()
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT SD.id, SD.idsession, SD.idcourse, C.name as namecourse, SD.count, SD.price, SD.enable, SD.idemployee FROM  cafecoirieng_session_detail SD inner join cafecoirieng_course C ON C.id = SD.idcourse", this.Connection);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            this.close();

            IList<CafeModel.SessionDetail> lstObj = dt.AsEnumerable().Select(row =>
                new CafeModel.SessionDetail(
                    row.Field<long>("id"),
                    row.Field<long>("idsession"),
                    row.Field<long>("idcourse"),
                    row.Field<string>("namecourse"),
                    row.Field<float>("count"),
                    row.Field<long>("price"),
                    row.Field<int>("enable"),
                    row.Field<long>("id_employee"),
                    0
                )
            ).ToList();
            return lstObj;
        }

        public IList<CafeModel.SessionDetail> getAllSynC(DateTime D)
        {
            this.open();
            string strSQL1 = "SELECT SD.id, SD.idsession, SD.idcourse, (SELECT C.name FROM cafecoirieng_course C WHERE C.id = SD.id_course) as namecourse, SD.count, SD.price, SD.enable, SD.idemployee ";
            string strSQL2 = "FROM `cafecoirieng_session` S INNER JOIN `cafecoirieng_session_detail` SD ON S.id=SD.idsession ";
            string strSQL3 = "WHERE date(S.datetime)='" + D.ToString("yyyy-MM-dd") + "'";

            MySqlCommand cmd = new MySqlCommand(strSQL1 + strSQL2 + strSQL3, this.Connection);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            this.close();

            IList<CafeModel.SessionDetail> lstObj = dt.AsEnumerable().Select(row =>
                new CafeModel.SessionDetail(
                    row.Field<long>("id"),
                    row.Field<long>("idsession"),
                    row.Field<long>("idcourse"),
                    row.Field<string>("namecourse"),
                    row.Field<float>("count"),
                    row.Field<long>("price"),
                    row.Field<int>("enable"),
                    row.Field<long>("idemployee"),
                    0
                )
            ).ToList();
            return lstObj;
        }

        public CafeModel.SessionDetail get(int Id)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT SELECT SD.id, SD.idsession, SD.idcourse, (SELECT C.name FROM cafecoirieng_course C WHERE C.id = SD.id_course) as namecourse, SD.count, SD.price, SD.enable, SD.idemployee FROM cafecoirieng_session_detail WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Id);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            var Obj = new CafeModel.SessionDetail(
                dt.Rows[0].Field<long>("id"),
                dt.Rows[0].Field<long>("idsession"),
                dt.Rows[0].Field<long>("idcourse"),
                dt.Rows[0].Field<string>("namecourse"),
                dt.Rows[0].Field<float>("count"),
                dt.Rows[0].Field<long>("price"),
                dt.Rows[0].Field<int>("enable"),
                dt.Rows[0].Field<long>("idemployee"),
                0
            );
            this.close();
            return Obj;
        }

        //CẬP NHẬT CƠ SỞ DỮ LIỆU
        public void insert(CafeModel.SessionDetail Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("INSERT INTO cafecoirieng_session_detail(id, idsession, idcourse, count, price, enable, idemployee) VALUES(@id, @id_session, @idcourse, @count, @price, @enable, @idemployee)", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@idsession", Obj.IdSession);
            cmd.Parameters.AddWithValue("@idcourse", Obj.IdCourse);
            cmd.Parameters.AddWithValue("@count", Obj.Count);
            cmd.Parameters.AddWithValue("@price", Obj.Price);
            cmd.Parameters.AddWithValue("@enable", Obj.Enable);
            cmd.Parameters.AddWithValue("@idemployee", Obj.IdEmployee);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void update(CafeModel.SessionDetail Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("UPDATE cafecoirieng_session_detail SET id=@id, idsession=@idsession, idcourse=@idcourse, count=@count, price=@price, enable=@enable, idemployee=@idemployee WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@idsession", Obj.IdSession);
            cmd.Parameters.AddWithValue("@idcourse", Obj.IdCourse);
            cmd.Parameters.AddWithValue("@count", Obj.Count);
            cmd.Parameters.AddWithValue("@price", Obj.Price);
            cmd.Parameters.AddWithValue("@enable", Obj.Enable);
            cmd.Parameters.AddWithValue("@idemployee", Obj.IdEmployee);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void delete(CafeModel.SessionDetail Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("DELETE FROM  cafecoirieng_session_detail WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.ExecuteNonQuery();
            this.close();
        }
    }
}
