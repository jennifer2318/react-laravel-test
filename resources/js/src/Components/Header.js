import React, {Component, lazy} from 'react';
import PropTypes from 'prop-types';
import {Link} from "react-router-dom";

class Header extends Component {
    constructor(props) {
        super(props);

        this.headerFixed = React.createRef();
    }

    scrollHandler = e => {
        if (window.scrollY >= 300) {
            this.headerFixed.current.style.top = 0;
        }else {
            this.headerFixed.current.style.top = `-${Number(this.headerFixed.current.offsetHeight) + 100}px`;
        }
    };

    componentDidMount() {
        document.addEventListener('scroll', this.scrollHandler);
    }

    componentWillUnmount() {
        document.removeEventListener('scroll', this.scrollHandler);
    }

    render() {

        return (
            <header>

                <div className="header header-main">

                    <div className="container">
                        <div className="header__row">



                        </div>
                    </div>
                </div>

                <div className="header">
                    <div className="header__fixed" ref={this.headerFixed}>
                        <div className="container">
                            <div className="header__row">

                            </div>
                        </div>
                    </div>
                </div>

            </header>
        );
    }
}

Header.propTypes = {};

export default Header;
