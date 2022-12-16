import React,{ Component } from "react" ;


class Task extends React.Component {
  
    constructor (props){
        super(props)
        this.state
    }

    render(){
        return (
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
        );
    }
}

export default Task;