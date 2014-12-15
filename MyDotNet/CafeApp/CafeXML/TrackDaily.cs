﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using CafeModel;
using CafeGateway;

namespace CafeXML
{
    public class TrackDaily
    {
        public TrackDailyList List;
        public CafeGateway.TrackDaily Gateway;

        public TrackDaily(bool bSync = true)
        {
            Gateway = new CafeGateway.TrackDaily();
            if (bSync == true)
                List = Gateway.XML2List();
        }
                
        //Hàm hỗ trợ SynC
        public int getCountChange()
        {
            var ObjAll = this.getAll();
            int Count = 0;

            foreach (var Obj in ObjAll)
            {
                if (Obj.State != 0)
                {
                    Count++;
                }
            }
            return Count;
        }
        public void restart()
        {
            List = Gateway.XML2List();
        }

        //Lấy toàn bộ danh sách
        public IList<CafeModel.TrackDaily> getAll()
        {
            var ObjAll =
                from p in List.list
                where p.State != 3
                select p;

            return ObjAll.ToList();
        }

        public CafeModel.TrackDaily get(long Id)
        {
            var TrackDaily = List.list.FirstOrDefault(Obj => Obj.Id == Id);
            return TrackDaily;
        }

        public void add(CafeModel.TrackDaily TrackDaily)
        {
            List.list.Add(TrackDaily);
            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }

        public void update(CafeModel.TrackDaily Obj)
        {
            (from U in List.list
             where U.Id == Obj.Id
             select U).ToList().ForEach(U => U = Obj);

            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }

        public void delete(long Id)
        {
            foreach (var P in List.list)
            {
                if (P.Id == Id) { P.State = 3; }
            }
            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }

        public void deleteByDate(DateTime D)
        {
            var I2Remove = List.list.Where(x => x.DateTime.Date == D.Date).ToList();
            foreach (var P in I2Remove)
            {
                P.State = 3;
            }
        }

    }
}
