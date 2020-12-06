import { combineReducers } from 'redux';
import userReducer from "./userReducer";
import messageBarReducer from "./messageBarReducer";

export default combineReducers({
    user: userReducer,
    messageBar: messageBarReducer,
});
