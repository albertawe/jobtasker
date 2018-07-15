import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Postform from './components/job post/postform';
import { Provider } from 'react-redux';
import { reducer as formReducer } from 'redux-form';
import { createStore, combineReducers } from 'redux';
import JobPostReducer from './store/reducers/jobpost';

const rootReducer = combineReducers({
    form: formReducer,
});
const store = createStore(rootReducer);
// export default class Main extends Component {
//     render() {
//         return (
//             <div className="container">
//                 <div className="row justify-content-center">
//                     <div className="col-md-8">
//                         <div className="card">

//                         </div>
//                     </div>
//                 </div>
//             </div>
//         );
//     }
// }

if (document.getElementById('root')) {
    ReactDOM.render(<Provider store={store}><Postform /></Provider>, document.getElementById('root'));
}
