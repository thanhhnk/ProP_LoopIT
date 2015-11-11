﻿using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace JazzEventProject.Classes
{
    class CampDataHelper : DataHelper
    {
        public List<Camp> GetAllStudents()
        {
            String sql = "SELECT * FROM Camp";
            MySqlCommand command = new MySqlCommand(sql, connection);

            List<Camp> temp;
            temp = new List<Camp>();

            try
            {
                connection.Open();
                MySqlDataReader reader = command.ExecuteReader();

                int CampID;
                string CampDes;
                int MaxPerson;
                int available;
                while (reader.Read())
                {
                    CampID = Convert.ToInt32(reader["CampID"]);
                    CampDes = Convert.ToString(reader["Description"]);
                    MaxPerson = Convert.ToInt32(reader["MaxPerson"]);
                    available = Convert.ToInt32(reader["Available"]);
                }
            }
            catch
            {
                MessageBox.Show("error while loading the students");
            }
            finally
            {
                connection.Close();
            }
            return temp;
        }
    }
}
