import logo from './logo.svg';
import './App.css';

function App() {
  let x = 3;
  let y = 7;
  let z = x + y ;
  return (
    <div className="App">

      <h1>The sum</h1>
      <p>
        The Sum of x + y = {z}
      </p>
 
    </div>
  );
}

export default App;
