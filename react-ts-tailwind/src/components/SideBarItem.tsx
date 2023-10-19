import React, {useState} from 'react'
import { ISideBarItemProps } from '../types';
import {NavLink} from 'react-router-dom'

import ArrowDropDownIcon from '@mui/icons-material/ArrowDropDown';

function SideBarItem({icon, routePath, title}: ISideBarItemProps) {
    const [isOpen, setOpen] = useState(false);

  const toggleAccordion = () => {
    setOpen(!isOpen);
  }
  return (
    <div className="flex flex-col items-center w-full">
        <NavLink 
          className="flex items-center gap-3 rounded-md border-graycash border-2 py-2
           px-5 w-[16rem] mx-auto cursor-pointer"
          onClick={toggleAccordion}
          to={routePath}
        >
          {/* icon */}
          {icon}
          <div 
            className="text-graycash text-[1.25rem]"
          >{title}</div>
          <div className={`ml-auto ${isOpen && 'rotate-180'}`}>
            <ArrowDropDownIcon style={{ color:'white'}}/>
          </div>
        </NavLink>
        {
          isOpen && (
            <div className="flex flex-col gap-2 items-center bg-greencash-light w-[16rem] mx-auto rounded-md">
              <div className="w-full px-4 text-graycash text-[1.25rem] py-1">Item 1</div>
              <div className="w-full px-4 text-graycash text-[1.25rem] py-1">Item 2</div>
            </div>
          )
        }
      </div>
  )
}

export default SideBarItem