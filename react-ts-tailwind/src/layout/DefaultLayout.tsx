import React from 'react'
import { Outlet } from 'react-router-dom'

import SideBar from '../components/SideBar'
import Overview from '../components/Overview';

import SearchIcon from '@mui/icons-material/Search';
import NotificationsIcon from '@mui/icons-material/Notifications';

import profil from '../images/profil/profil.png'

function DefaultLayout() {
  return (
    <div className='flex h-screen bg-greencash overflow-hidden'>
      {/* side bar */}
      <SideBar/>

      {/* Content Area */}
      <div className='flex flex-1 border-2 border-[#DB7439] w-[calc(100%-18rem)] ml-[18rem] px-3 py-3 overflow-x-hidden overflow-y-visible'>
        <div className='relative h-[100rem] w-full bg-graycash rounded-xl'>
          {/* Header */}
          <header className='top-0 z-999 w-full bg-graycash drop-shadow-1 rounded-xl'>
            <div className='flex items-center justify-between py-4 px-4'>
              {/* Search bar section */}
              <div className='flex'>
                <form action="" className='flex rounded-lg overflow-hidden h-[2.25rem]'>
                  <input 
                    type="text" 
                    name="" 
                    className='h-full w-[75%] focus:outline-none pl-3' 
                    placeholder='Search...'
                  />
                  <button 
                    type="submit"
                    className='h-full w-[25%]'
                  >
                    <SearchIcon style={{ fontSize:'1.75rem', color:'gray2'}}/>
                  </button>
                </form>
              </div>

              {/* Cloche && prolif */}
              <div className='flex items-center justify-between gap-2'>
                <NotificationsIcon style={{ fontSize:'1.75rem', color:'gray2'}}/>
                <img src={profil} alt="profil" className='h-[1.75rem] w-[1.75rem] rounded-full'/>
              </div>
            </div>
          </header>

          <div className='h-[0.5px] w-[95%] bg-[#76797A] mx-auto'></div>

          {/* ***** main ****** */}
          <div className='w-full h-auto flex flex-col gap-10 px-4 py-5'>
            <Outlet />
            
          </div>
        </div>

        
      </div>
    </div>
  )
}

export default DefaultLayout