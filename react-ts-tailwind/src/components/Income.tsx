import React, { useState } from 'react'
import ConfirmationBox from './Modal/ConfirmationBox'

function Income() {
  const [isClicked, setClicked] = useState(false)

  return (
    <>
      <div className='flex justify-between'>
        {/* label */}
        <div className="text-[1.5rem] text-gray2 font-medium">Income</div>

        <div className='flex items-center gap-4'>
          {/* Export Excell button */}
          <div className='flex items-center justify-between px-3 py-2 rounded-xl bg-white text-gray2 font-light'>
            Export to Excel
          </div>

          {/* Add btn */}
          <div 
            className='flex items-center justify-between gap-2 px-3 py-2 rounded-xl bg-white hover:bg-greencash-light text-greencash-light hover:text-white cursor-pointer font-light'
            onClick={() => setClicked(!isClicked)}  
          >
            <div className='flex items-center justify-center rounded-full text-[1.1rem] font-medium'>+</div>
            <div>Add</div>
          </div>
        </div>
      </div>
      
      {/* table section */}
      <div className='flex flex-col gap-4 w-full'>
        {/* table header */}
        {/* <div className=''> */}
          {
            isClicked && (
              <ConfirmationBox />
              // <div>Hello</div>
            )
          }
        {/* </div> */}
      </div>
    </>
  )
}

export default Income