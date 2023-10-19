import React from "react";

import CallReceivedIcon from "@mui/icons-material/CallReceived";
import CallMadeIcon from "@mui/icons-material/CallMade";
import BalanceIcon from "@mui/icons-material/Balance";

import TableOne from "./TableOne";
import BudgetTable from "./BudgetTable";

function Overview() {
  return (
    <>
      {/* label */}
      <div className="text-[1.5rem] text-gray2 font-medium">Overview</div>

      {/* three card container */}
      <div className="flex items-center justify-between">
        <div className="flex flex-col justify-between  text-center h-[10rem] w-[19rem] bg-white px-5 py-4 rounded-xl">
          <div className="flex gap-5 items-center justify-center">
            <div className="pt-2">
              <CallReceivedIcon
                style={{ fontSize: "2rem", color: "#8ef765db" }}
              />
            </div>

            <div className="text-[1.75rem] text-[#8ef765db] font-normal py-0">
              Income
            </div>
          </div>

          <div className="text-[1.50rem] text-[#6d6a67] font-light">4</div>
          <div className="text-[1.50rem] text-[#5f5853]">0 ar</div>
        </div>

        <div className="flex flex-col justify-between  text-center h-[10rem] w-[19rem] bg-white px-5 py-4 rounded-xl">
          <div className="flex gap-5 items-center justify-center">
            <div className="pt-2">
              <CallMadeIcon style={{ fontSize: "2rem", color: "#f6685eec" }} />
            </div>

            <div className="text-[1.75rem] text-[#f6685eec] font-normal py-0">
              Expense
            </div>
          </div>

          <div className="text-[1.50rem] text-[#6d6a67] font-light">4</div>
          <div className="text-[1.50rem] text-[#5f5853]">0 ar</div>
        </div>

        <div className="flex flex-col justify-between  text-center h-[10rem] w-[19rem] bg-white px-5 py-4 rounded-xl">
          <div className="flex gap-5 items-center justify-center">
            <div className="pt-2">
              <BalanceIcon style={{ fontSize: "2rem", color: "gray2" }} />
            </div>

            <div className="text-[1.75rem] text-gray2 font-normal py-0">
              Balance
            </div>
          </div>

          <div className="text-[1.50rem] text-[#6d6a67] font-light">4</div>
          <div className="text-[1.50rem] text-[#5f5853]">0 ar</div>
        </div>
      </div>

      {/* chart year == income(total) + expense(total) + balance(last) every month 
Bar chart*/}
      <div className="bg-white rounded-xl w-full h-[28rem]">Bar chart</div>

      {/* recent activities:
- income
- outcome
 */}
      <div className="flex flex-col gap-4 bg-white rounded-xl w-full h-auto px-4 py-5">
        <div className="text-[1.1rem] text-gray2 font-normale">
          Recent activities
        </div>
        <div className="h-[1px] w-full bg-gray2 mx-auto"></div>
        <TableOne />
      </div>

      <div className="flex flex-col gap-4 bg-white rounded-xl w-full h-auto px-4 py-5">
        <div className="text-[1.1rem] text-gray2 font-normale">
          Budgetary status
        </div>
        <div className="h-[1px] w-full bg-gray2 mx-auto"></div>
        <BudgetTable />
      </div>
    </>
  );
}

export default Overview;
