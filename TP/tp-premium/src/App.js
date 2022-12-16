import logo from './logo.svg';
import './App.css';

import React from "react";

import Task from './Component/AppTodo';


class App extends React.Component {
  render(){
    return (
      <div className='App'>
        
        <Task/>

      </div>
    );
  }
}
    


export default App;
