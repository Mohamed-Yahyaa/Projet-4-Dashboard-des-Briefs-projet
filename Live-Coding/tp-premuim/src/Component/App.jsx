import React from "react";
import axios from "axios"



class Task extends React.Component {

    Constructor (props) {
        super (props)
        this.state = {
            Data:[],
           Name_Task:"",
        }
    }

   
componentDidMount(){
    axios.get('http://localhost:8000/api/index')
    .then(res=>
        this.setState({
            Data:res.data
        })
        )
}

handelChange=(input)=>{
    this.setState({
        Name_Task:  input.target.value
    })
  
}

handelClick=()=>{
    axios.post('http://localhost:8000/api/store',this.state)
    .then(res=>{
        alert('sucess')
        window.location.reload()
    })
}

handelDelete=(id)=>{
    axios.delete('http://localhost:8000/api/destroy/'+id).then(res=>{
        alert("data has been deleted")
        window.location.reload()
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
    let id = this.state.id
    axios.post('http://localhost:8000/api/update/'+id,this.state).then(res=>{
        alert("data has updates")
        window.location.reload()
        })
    }


    render(){
    

        return(
            <div>
                <input type="text" value={this.state.Name_Task} onChange={this.handelChange}  />
                <button onClick = {this.handelClick}>Ajouter</button>
                <button onClick = {this.handelUpdate}>Modifier</button>
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


export default Table ;