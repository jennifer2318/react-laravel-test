import React, {Component} from 'react';
import Section from "../Section";
import Field from "../Field";
import {connect} from 'react-redux';
import {userLogin} from "../../Actions";

class Login extends Component {

    constructor(props) {
        super(props);

        this.state = {
            email: '',
            password: '',
        };
    }

    changeHandler = obj => {
        this.setState({
            [obj.name]: obj.value,
        });
    };

    submitHandler = e => {
        const {email, password} = this.state;
        const canSend = email !== '' && password !== '';
        e.preventDefault();

        if (canSend) {
            this.props.userLogin({
                email: email,
                password: password,
            });
        }
    };

    render() {
        const {email, password} = this.state;

        return (
            <Section className='section-login'>
                <div className="form-container">
                    <h1 className='form-title'>Форма авторизации</h1>
                    <form method='POST' onSubmit={this.submitHandler}>
                        <Field onChange={this.changeHandler} id='email' type='email' value={email} name='email' placeholder='Ваш email'/>
                        <Field onChange={this.changeHandler} id='password' type='password' value={password} name='password' placeholder='Ваш пароль'/>
                        <input type='submit' className='button btn-accent centered'/>
                    </form>
                </div>
            </Section>
        );
    }
}

const mapDispatchToProps = dispatch => ({
    userLogin: userInfo => dispatch(userLogin(userInfo))
});

export default connect(null, mapDispatchToProps)(Login);
