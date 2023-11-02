// import React from 'react'
import {ChangeEvent, useState} from 'react'

function FormAPI() {
  const [inputText, setInputText] = useState('');

  const handleChange = (e:ChangeEvent<HTMLInputElement>) => {
    setInputText(e.target.value);
  };

  return (
    <div className='w-full flex items-center justify-center rounded-xl bg-white px-4 py-5'>
        <form action="" className='w-full flex flex-col gap-3'>
            <div className='w-full flex flex-col gap-1'>
                <label htmlFor="">Prompt</label>
                <input 
                    type="text"  
                    className='w-full h-10 shadow focus:outline-none border border-greencash border-1 rounded-lg p-2'
                    onChange={handleChange}
                    value={inputText}    
                />
            </div>
            <div className='w-full flex flex-col gap-1'>
                <label htmlFor="">Response</label>
                <textarea  
                    className='w-full h-35 shadow focus:outline-none border border-greencash border-1 rounded-lg p-2'    
                >
                  
                </textarea>   
                <p>Your input : {inputText}</p>
            </div>
        </form>
    </div>
  )
}

export default FormAPI