import React from "react";
import axios from "axios";


class Table extends React.Component {
      
state = {
    Data:[],
    Name_Task:"",
    id:""
}

componentDidMount(){
    axios.get("http://localhost:8000/api/index")
    .then(res=>this.setState({
        Data:res.data
    }))
}
handelChange=(input)=>{
    this.setState({
        Name_Task : input.target.value
    })
}

handelClick=()=>{
    axios.post("http://localhost:8000/api/store",this.state)
    .then(res=>{

        axios.get("http://localhost:8000/api/index")
        .then(res=>this.setState({
            Data:res.data
        }))
      
    })
     
}
handelDelete=(id)=>{
    axios.delete("http://localhost:8000/api/destroy/"+id).then(res=>{
        
        axios.get("http://localhost:8000/api/index")
        .then(res=>this.setState({
            Data:res.data
        }))

    })
}

handelEdit=(id)=>{
    axios.get('http://localhost:8000/api/edit/'+id).then(res=>{
        this.setState({
            Name_Task:res.data.Name_Task,
            id:res.data.id
        })
    })
}

handelUpdate=()=>{
    axios.post('http://localhost:8000/api/update/'+this.state.id, {
        Name_Task : this.state.Name_Task
    })
    .then(res=>{
        axios.get("http://localhost:8000/api/index")
        .then(res=>this.setState({
            Data:res.data
        }))
        
    })
}
render(){

    return (
        <div>
            <input type = "text" value ={this.state.Name_Task} onChange={this.handelChange}/>
            <button onClick={this.handelClick}>Ajouter</button>
            <button onClick={this.handelUpdate}>Modifier</button>
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Task</th>
                    </tr>
                </thead>
                <tbody>
                        {this.state.Data.map((value)=>
                        <tr>
                            <td>{value.id}</td>
                            <td>{value.Name_Task}</td>
                            <td>
                                <button onClick= {this.handelDelete.bind(this,value.id)}>Delete</button>
                                <button onClick= {this.handelEdit.bind(this,value.id)}>Edit</button>
                            </td>
                        </tr>
                        
                        )}
                    </tbody>
            </table>
        </div>
    )
}
}



export default Table;