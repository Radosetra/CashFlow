import { useState } from 'react'
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom'

import DefaultLayout from './layout/DefaultLayout';
import Overview from './components/Overview';
import Income from './components/Income';


function App() {
  const [count, setCount] = useState(0)

  return (
    <Router>
      <Routes>
        <Route 
          element={<DefaultLayout />}
        >
          <Route 
            path='/'
            element={<Overview />}
          />
          <Route 
            path='/income'
            element={<Income />}
          />
        </Route>
      </Routes>
    </Router>
    
  )
}

export default App
