using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Personal_info
{
    #region Information
    public class Information
    {
        #region Member Variables
        protected int _id;
        protected string _fullname;
        protected string _email;
        protected string _password;
        protected string _gender;
        #endregion
        #region Constructors
        public Information() { }
        public Information(string fullname, string email, string password, string gender)
        {
            this._fullname=fullname;
            this._email=email;
            this._password=password;
            this._gender=gender;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Fullname
        {
            get {return _fullname;}
            set {_fullname=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual string Gender
        {
            get {return _gender;}
            set {_gender=value;}
        }
        #endregion
    }
    #endregion
}