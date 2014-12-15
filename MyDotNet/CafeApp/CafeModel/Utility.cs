using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CafeModel
{
    public static class Utility
    {
        public static string[] arrDigit = { "", "một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín" };
        public static string[] arrUnit = { "", "ngàn", "triệu", "tỉ" };

        public static string read3Digit(long number)
        {
            int n1 = (int)(number / 100);
            int n2 = (int)((number % 100) / 10);
            int n3 = (int)(number % 10);

            string Value = "";
            if (n1 > 0)
            {
                if (n2 == 0)
                {
                    if (n3 == 0)
                        Value = arrDigit[n1] + " trăm ";
                    else
                        Value = arrDigit[n1] + " trăm lẻ " + arrDigit[n3];
                }
                else if (n2 == 1)
                {
                    if (n3 == 5)
                    {
                        Value = arrDigit[n1] + " trăm mười lăm";
                    }
                    else
                    {
                        Value = arrDigit[n1] + " trăm mười " + arrDigit[n3];
                    }
                }
                else
                {
                    if (n3 == 5)
                    {
                        Value = arrDigit[n1] + " trăm " + arrDigit[n2] + " mươi lăm";
                    }
                    else if (n3 == 1)
                    {
                        Value = arrDigit[n1] + " trăm " + arrDigit[n2] + " mươi mốt";
                    }
                    else
                    {
                        Value = arrDigit[n1] + " trăm " + arrDigit[n2] + " mươi " + arrDigit[n3];
                    }
                }
            }
            else
            {
                if (n2 == 0)
                {
                    if (n3 == 0)
                    {
                        Value = "";
                    }
                    else
                    {
                        Value = arrDigit[n3];
                    }
                }
                else if (n2 == 1)
                {
                    if (n3 == 5)
                    {
                        Value = "mười lăm";
                    }
                    else
                    {
                        Value = arrDigit[n1] + " mười " + arrDigit[n3];
                    }
                }
                else
                {
                    if (n3 == 5)
                    {
                        Value = arrDigit[n2] + " mươi lăm";
                    }
                    else if (n3 == 1)
                    {
                        Value = arrDigit[n2] + " mươi mốt";
                    }
                    else
                    {
                        Value = arrDigit[n2] + " mươi " + arrDigit[n3];
                    }
                }
            }
            return Value;
        }

        public static string readDigit(long number)
        {
            long NTemp = 0;
            string Value = "";
            int index = 0;

            while (number > 0)
            {
                NTemp = number % 1000;
                string STemp = read3Digit(NTemp);

                if (STemp != "")
                {
                    Value = STemp + " " + arrUnit[index] + " " + Value;
                }
                number = (long)(number / 1000);
                index += 1;
            }
            return Value;
        }

    }
}
