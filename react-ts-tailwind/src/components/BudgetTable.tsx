import React from 'react'

function BudgetTable() {
  return (
    <div className='flex flex-1 h-full w-full rounded-xl'>
      <table className='w-full table-auto text-left rounded-xl'>
        <thead >
          <tr className='rounded-xl'>
            <th className='bg-wdark text-greencash-light p-4'>ID</th>
            <th className='bg-wdark text-greencash-light p-4'>Categorie</th>
            <th className='bg-wdark text-greencash-light p-4'>Fixed</th>
            <th className='bg-wdark text-greencash-light p-4'>Spend</th>
            <th className='bg-wdark text-greencash-light p-4'>State</th>
          </tr>
        </thead>
        <tbody>
          <tr className='odd:bg-white even:bg-slate-50 scalable-row rounded-xl'>
            <td className='text-gray2 p-4'>001</td>
            <td className='text-gray2 p-4'>Food</td>
            <td className='text-gray2 p-4'>20 000 ar</td>
            <td className='text-gray2 p-4'>10 000 ar</td>
            <td className='text-gray2 p-4'>Ok</td>
          </tr>
          <tr className='odd:bg-white even:bg-slate-50 scalable-row rounded-xl'>
          <td className='text-gray2 p-4'>001</td>
            <td className='text-gray2 p-4'>Food</td>
            <td className='text-gray2 p-4'>30 000 ar</td>
            <td className='text-gray2 p-4'>25 000 ar</td>
            <td className='text-gray2 p-4'>Warning</td>
          </tr>
          <tr className='odd:bg-white even:bg-slate-50 scalable-row rounded-xl'>
          <td className='text-gray2 p-4'>001</td>
            <td className='text-gray2 p-4'>Food</td>
            <td className='text-gray2 p-4'>20 000 ar</td>
            <td className='text-gray2 p-4'>20 000 ar</td>
            <td className='text-gray2 p-4'>None</td>
          </tr>
        </tbody>
      </table>
    </div>
  )
}

export default BudgetTable