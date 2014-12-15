using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using MySql.Data.MySqlClient;

using CafeModel;

namespace CafeDB
{
    public class Session : MySQLData
    {
        //TRUY XUẤT CƠ SỞ DỮ LIỆU
        public IList<CafeModel.Session> getAll()
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_session", this.Connection);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            this.close();

            IList<CafeModel.Session> lstTag = dt.AsEnumerable().Select(row =>
                new CafeModel.Session(
                    row.Field<long>("id"),
                    row.Field<long>("idtable"),
                    row.Field<long>("iduser"),
                    row.Field<long>("idcustomer"),
                    row.Field<long>("idemployee"),
                    row.Field<DateTime>("datetime"),
                    row.Field<DateTime>("datetimeend"),
                    row.Field<string>("note"),
                    row.Field<int>("status"),
                    row.Field<int>("discountvalue"),
                    row.Field<int>("discountpercent"),
                    row.Field<int>("surtax"),
                    row.Field<int>("payment"),
                    0
                   )
            ).ToList();
            return lstTag;
        }


        public IList<CafeModel.Session> getAllSynC()
        {
            this.open();

            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_session WHERE date(datetime) >= CURDATE() ORDER BY datetime DESC", this.Connection);

            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            this.close();

            IList<CafeModel.Session> lstTag = dt.AsEnumerable().Select(row =>
                new CafeModel.Session(
                    row.Field<long>("id"),
                    row.Field<long>("idtable"),
                    row.Field<long>("iduser"),
                    row.Field<long>("idcustomer"),
                    row.Field<long>("idemployee"),
                    row.Field<DateTime>("datetime"),
                    row.Field<DateTime>("datetimeend"),
                    row.Field<string>("note"),
                    row.Field<int>("status"),
                    row.Field<int>("discountvalue"),
                    row.Field<int>("discountpercent"),
                    row.Field<int>("surtax"),
                    row.Field<int>("payment"),
                    0
                   )
            ).ToList();
            return lstTag;
        }

        public CafeModel.Session get(int Id)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_session WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Id);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            CafeModel.Session Obj = new CafeModel.Session(
                dt.Rows[0].Field<long>("id"),
                dt.Rows[0].Field<long>("idtable"),
                dt.Rows[0].Field<long>("iduser"),
                dt.Rows[0].Field<long>("idcustomer"),
                dt.Rows[0].Field<long>("idemployee"),
                dt.Rows[0].Field<DateTime>("datetime"),
                dt.Rows[0].Field<DateTime>("datetimeend"),
                dt.Rows[0].Field<string>("note"),
                dt.Rows[0].Field<int>("status"),
                dt.Rows[0].Field<int>("discountvalue"),
                dt.Rows[0].Field<int>("discountpercent"),
                dt.Rows[0].Field<int>("surtax"),
                dt.Rows[0].Field<int>("payment"),
                0
            );
            this.close();

            return Obj;
        }

        //CẬP NHẬT CƠ SỞ DỮ LIỆU
        public void insert(CafeModel.Session Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("INSERT INTO cafecoirieng_session(id, idtable, iduser, idcustomer, idemployee, datetime, datetimeend, note, status, discountvalue, discountpercent, surtax, payment) VALUES(@id, @idtable, @iduser, @idcustomer, @idemployee, @datetime, @datetimeend, @note, @status, @discountvalue, @discountpercent, @surtax, @payment)", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@idtable", Obj.IdTable);
            cmd.Parameters.AddWithValue("@iduser", Obj.IdUser);
            cmd.Parameters.AddWithValue("@idcustomer", Obj.IdCustomer);
            cmd.Parameters.AddWithValue("@idemployee", Obj.IdEmployee);
            cmd.Parameters.AddWithValue("@datetime", Obj.DateTime);
            cmd.Parameters.AddWithValue("@datetimeend", Obj.DateTimeEnd);
            cmd.Parameters.AddWithValue("@note", Obj.Note);
            cmd.Parameters.AddWithValue("@status", Obj.Status);
            cmd.Parameters.AddWithValue("@discountvalue", Obj.DiscountValue);
            cmd.Parameters.AddWithValue("@discountpercent", Obj.DiscountPercent);
            cmd.Parameters.AddWithValue("@surtax", Obj.Surtax);
            cmd.Parameters.AddWithValue("@payment", Obj.Payment);

            cmd.ExecuteNonQuery();
            this.close();
        }

        public void update(CafeModel.Session Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("UPDATE cafecoirieng_session SET id=@id, idtable=@idtable, idcustomer=@idcustomer, idemployee=@idemployee, datetime=@datetime, datetimeend=@datetimeend, note=@note, status=@status, discountvalue=@discountvalue, discountpercent=@discountpercent, surtax=@surtax, payment=@payment  WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@idtable", Obj.IdTable);
            cmd.Parameters.AddWithValue("@iduser", Obj.IdUser);
            cmd.Parameters.AddWithValue("@idcustomer", Obj.IdCustomer);
            cmd.Parameters.AddWithValue("@idemployee", Obj.IdEmployee);
            cmd.Parameters.AddWithValue("@datetime", Obj.DateTime);
            cmd.Parameters.AddWithValue("@datetimeend", Obj.DateTimeEnd);
            cmd.Parameters.AddWithValue("@note", Obj.Note);
            cmd.Parameters.AddWithValue("@status", Obj.Status);
            cmd.Parameters.AddWithValue("@discountvalue", Obj.DiscountValue);
            cmd.Parameters.AddWithValue("@discountpercent", Obj.DiscountPercent);
            cmd.Parameters.AddWithValue("@surtax", Obj.Surtax);
            cmd.Parameters.AddWithValue("@payment", Obj.Payment);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void delete(CafeModel.Session Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("DELETE FROM  cafecoirieng_session WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.ExecuteNonQuery();
            this.close();
        }

        //Xử lí theo lô
        //Thêm 1 loạt các danh sách
        public void insertByList(IList<CafeModel.Session> ObjAll)
        {
            this.open();
            using (MySqlTransaction oTransaction = this.Connection.BeginTransaction())
            {
                using (MySqlCommand cmd = this.Connection.CreateCommand())
                {
                    cmd.Transaction = oTransaction;
                    cmd.CommandType = CommandType.Text;
                    cmd.CommandText = "INSERT INTO cafecoirieng_track_summary(id_track, time_start, time_end, state) VALUES(@id_track, @time_start, @time_end, @state)";
                    cmd.Parameters.Add("@id_track", MySqlDbType.Int32);
                    cmd.Parameters.Add("@time_start", MySqlDbType.DateTime);
                    cmd.Parameters.Add("@time_end", MySqlDbType.DateTime);
                    cmd.Parameters.Add("@state", MySqlDbType.Int32);

                    try
                    {
                        foreach (var Obj in ObjAll)
                        {
                            //cmd.Parameters[0].Value = Obj.IdTrack;
                            //cmd.Parameters[1].Value = Obj.TimeStart;
                            //cmd.Parameters[2].Value = Obj.TimeEnd;
                            //cmd.Parameters[3].Value = Obj.State;
                            if (cmd.ExecuteNonQuery() != 1)
                            {
                                throw new InvalidProgramException();
                            }
                        }
                        oTransaction.Commit();
                    }
                    catch (Exception)
                    {
                        oTransaction.Rollback();
                        throw;
                    }
                }
            }
            this.close();
        }
    }
}
