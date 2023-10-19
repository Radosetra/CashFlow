import React from 'react'
import "../cf.css"

function TableOne() {
  return (
    <div className='flex flex-1 h-full w-full rounded-xl'>
      <table className='w-full table-auto text-left rounded-xl'>
        <thead >
          <tr className='rounded-xl'>
            <th className='bg-wdark text-greencash-light p-4'>ID</th>
            <th className='bg-wdark text-greencash-light p-4'>Type</th>
            <th className='bg-wdark text-greencash-light p-4'>Motif</th>
            <th className='bg-wdark text-greencash-light p-4'>Date</th>
          </tr>
        </thead>
        <tbody>
          <tr className='odd:bg-white even:bg-slate-50 scalable-row rounded-xl'>
            <td className='text-gray2 p-4'>001</td>
            <td className='text-gray2 p-4'>Income</td>
            <td className='text-gray2 p-4'>Gouter</td>
            <td className='text-gray2 p-4'>30/08/2023</td>
          </tr>
          <tr className='odd:bg-white even:bg-slate-50 scalable-row rounded-xl'>
            <td className=' text-gray2 p-4'>001</td>
            <td className=' text-gray2 p-4'>Income</td>
            <td className=' text-gray2 p-4'>Gouter</td>
            <td className=' text-gray2 p-4'>30/08/2023</td>
          </tr>
          <tr className='odd:bg-white even:bg-slate-50 scalable-row rounded-xl'>
            <td className=' text-gray2 p-4'>001</td>
            <td className=' text-gray2 p-4'>Income</td>
            <td className=' text-gray2 p-4'>Gouter</td>
            <td className=' text-gray2 p-4'>30/08/2023</td>
          </tr>
        </tbody>
      </table>
    </div>
  )
}

export default TableOne