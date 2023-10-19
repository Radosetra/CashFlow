import React, {useState} from "react";

// import {NavLink} from 'react-router-dom'

import logo from "../images/logo/cf-logo.jpg";

import AssessmentIcon from '@mui/icons-material/Assessment';
import AttachMoneyIcon from '@mui/icons-material/AttachMoney';
import ArrowOutwardIcon from '@mui/icons-material/ArrowOutward';
import AccountBalanceIcon from '@mui/icons-material/AccountBalance';

import SideBarItem from "./SideBarItem";

function SideBar() {
  return (
    <div className="flex flex-col gap-3 border-2 border-graycash h-screen fixed w-[18rem] overflow-y-hidden py-3">
      {/* SIDEBAR HEADER */}
      <div className="flex items-center gap-2 cursor-pointer px-6 ">
        <img src={logo} alt="logo" className="h-[3rem] w-[3rem] rounded-md" />
        <div className="text-graycash text-[2rem] font-serif ">CashFlow</div>
      </div>

      <div className="bg-graycash mx-auto h-[0.5px] w-[16rem]"></div>

      {/* sidebar element */}
      <SideBarItem icon={<AssessmentIcon style={{ fontSize:'1.75rem', color:'white'}} />} routePath="/" title="Overview"/>

      <SideBarItem icon={<AttachMoneyIcon style={{ fontSize:'1.75rem', color:'white'}} />} routePath="/income" title="Income"/>
      
      <SideBarItem icon={<ArrowOutwardIcon style={{ fontSize:'1.75rem', color:'white'}} />} routePath="/" title="Expense"/>
      
      <SideBarItem icon={<AccountBalanceIcon style={{ fontSize:'1.75rem', color:'white'}} />} routePath="/" title="Budget"/>

    </div>
  );
}

export default SideBar;
