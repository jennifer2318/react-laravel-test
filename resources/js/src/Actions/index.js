import axios from '../axios';

const loginUser = obj => ({
    type: 'LOGIN_USER',
    payload: obj
});

export const showMessage = msgObj => ({
    type: 'MESSAGEBAR_SHOW_MESSAGE',
    payload: msgObj
});

export const hideMessage = obj => ({
    type: 'MESSAGEBAR_HIDE_MESSAGE'
});

export const userLogin = user => {
    return dispatch => {
        return axios.post('/auth', user)
            .then(response => {
                if (response.data.payload) {
                    localStorage.setItem("token", response.data.payload);
                    dispatch(loginUser(response.data.payload));
                }
            })
            .catch(error => {
                if (error.response && error.response.data.success === false) {
                    dispatch(showMessage({message: error.response.data.error, type: 'err'}));
                }
            });
    };
};

export const getToken = () => {
    return dispatch => {
        const token = localStorage.token;
        if (token) {
            dispatch(loginUser(token));
        }
    };
};
